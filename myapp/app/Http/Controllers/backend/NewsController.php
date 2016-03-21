<?php namespace App\Http\Controllers\backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\NewsRequest;
use App\Model\News\CategoryNews;
use App\Model\News\News;

class NewsController extends Controller {


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$page = 1;
		$heading = 'ข่าวและกิจกรรม';
		$records = News::all()->count();
		$news 	 = [];
//		dd(News::all());

		foreach(News::all()->sortByDesc('id')->take(10) as $item => $value){
			$news[] = $value;
		}
		return view('backend.news.read', compact('heading', 'records', 'news', 'page'));

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
		$category_news = CategoryNews::all();
		return view('backend.news.create', compact('category_news'));
//		return 'hello';
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param NewsRequest $newsRequest
	 * @return Response
	 */
	public function store(NewsRequest $newsRequest)
	{
//		$category = CategoryNews::find($newsRequest->get('category'));

		// check data input :: NewsRequest class
		$input = $newsRequest->all();
//		News::create($input);

		if($newsRequest->hasFile('picture')){
			$public_path = 'images/news';

			$pic_filename 	= $newsRequest->file('picture')->getClientOriginalName();
			$pic_name 		= date('Ymd-His-') . $pic_filename;
			$destination 	= base_path() . $public_path;

			$newsRequest->file('picture')->move($destination, $pic_name);

			// add record picture

			News::create($input);
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
		return $id . 'edit';
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		News::destroy($id);
		return redirect('admin/news');
	}

}
