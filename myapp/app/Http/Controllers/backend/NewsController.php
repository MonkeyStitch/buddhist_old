<?php namespace App\Http\Controllers\backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\News\News;
use Illuminate\Http\Request;

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

		foreach(News::all() as $item => $value){
			if($item < 10){
				$news[] = $value;
			}
		}

//		return view('backend.news.read')->with('heading', $heading);
		return view('backend.news.read', compact('heading', 'records', 'news', 'page'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		dd(News::get());
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return $id;
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
		return $id . ' destroy';
	}

}
