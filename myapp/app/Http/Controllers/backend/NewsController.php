<?php namespace App\Http\Controllers\backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\NewsRequest;
use App\Model\News\CategoryNews;
use App\Model\News\News;
use Illuminate\Support\Facades\Session;

class NewsController extends Controller {



	public function pageNews($page = 1){
		$heading = 'ข่าวและกิจกรรม';

		$records = News::all()->count();
		$breadcrumb = true;
		$page_max = ceil($records/10);
		$news 	 = [];

		if((!is_numeric($page)) || ($page <= 0)){
			return redirect('admin/news/1');
		} else if($page > ceil($records/10)) {
			return redirect('admin/news/' . ceil($records/10));
		}

		foreach(News::all()->sortByDesc('id') as $item => $value){
			if($item >= (($page_max - $page)*10) && $item < (($page_max - $page)*10)+10){
				$news[] = $value;
			}
		}


		return view('backend.news.read', compact('heading', 'records', 'news', 'page', 'breadcrumb'));
//		return $news;
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$page = 1;
		$breadcrumb = false;
		$heading = 'ข่าวและกิจกรรม';
		$records = News::all()->count();
		$news 	 = [];
//		dd(News::all());

		foreach(News::all()->sortByDesc('id')->take(10) as $item => $value){
			$news[] = $value;
		}
		return view('backend.news.read', compact('heading', 'records', 'news', 'page', 'breadcrumb'));

//		return view('backend.news.read')->with('heading', $heading);
//		return view('errors.503');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$category_news = CategoryNews::lists('category', 'id');
		return view('backend.news.create', compact('category_news'));
//		return $category_news;
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param NewsRequest $newsRequest
	 * @return Response
	 */
	public function store(NewsRequest $newsRequest)
	{
		// check data input :: NewsRequest class
		$input = new News($newsRequest->all());
//		$input['category_id'] = $newsRequest['category'];

		if($newsRequest->hasFile('picture')){
			$public_path = '/images/news';

			$pic_filename 	= $newsRequest->file('picture')->getClientOriginalName();
			$pic_name 		= date('Ymd-His-') . $pic_filename;
			$destination 	= base_path('../') . $public_path;

			$newsRequest->file('picture')->move($destination, $pic_name);

			// add record picture
			$input['picture'] = $public_path . '/' . $pic_name;
			$input->save();

		}

		dd($newsRequest->all());
		return redirect('admin/news');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$news = News::find($id);

		if(empty($news)) {
			abort(404);
		}

		return view('backend.news.show', compact('news'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $news = News::find($id);
        $category_news = CategoryNews::lists('category', 'id');

//        return $news;
		return view('backend.news.edit', compact('news', 'category_news'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param NewsRequest $request
	 * @return Response
	 * @throws \Symfony\Component\HttpFoundation\File\Exception\FileException
	 * @internal param int $id
	 */
	public function update($id, NewsRequest $request)
	{
		$news = News::find($id);
		$path_image = base_path('..') . $news->picture;

		// check image
		if($request->hasFile('picture')){

			// find file image
			/** @var string url $path_image */
			if(file_exists($path_image)){
				// unlink image or delete image
				unlink($path_image);
			}

			// directory, read name file and rename
			$public_path = '/images/news';
			$pic_filename 	= $request->file('picture')->getClientOriginalName();
			$pic_name 		= date('Ymd-His-') . $pic_filename;
			$destination 	= base_path('../') . $public_path;
			// move or copy file image
			$request->file('picture')->move($destination, $pic_name);

			// add record picture
			$news->picture = $public_path . '/' . $pic_name;
		}
		$news->save();

		// session
		Session::flash('update', 'อัพเดทข้อมูลข่าว id: '.$id.' สำเร็จ');

		return redirect('admin/news');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// find $id
		$news = News::find($id);
		$path_image = base_path('..') . $news->picture;

		// find file image
		if(file_exists($path_image)){
			// unlink image or delete image
			unlink($path_image);
		}
		// delete news
		$news->delete();


		// redirect
        Session::flash('message', 'ลบข้อมูลข่าว id: '.$id.' สำเร็จ');
		return redirect('admin/news');
//		return $path_image;
	}

}
