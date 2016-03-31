<?php namespace App\Http\Controllers\backend\doctrines;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\Doctrines\AuthorsRequest;
use App\Model\Doctrines\Authors;
use Illuminate\Http\Request;

class AuthorsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$heading = 'ผู้ให้โอวาสหลักธรรมคำสอน';
		$breadcrumb = false; //
		$authors = Authors::all();
		$count = Authors::all()->count();
		return view('backend.doctrines.authors.index', compact('heading', 'breadcrumb', 'authors', 'count'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('backend.doctrines.authors.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(AuthorsRequest $request)
	{
		$input = new Authors($request->all());

		if($request->hasFile('picture')){
			$public_path = '/images/doctrines';

			$pic_filename 	= $request->file('picture')->getClientOriginalName();
			$pic_name 		= date('Ymd-His-') . $pic_filename;
			$destination 	= base_path('../') . $public_path;

			$request->file('picture')->move($destination, $pic_name);

			// add record picture
			$input['picture'] = $public_path . '/' . $pic_name;
			$input->save();

		}

		return redirect('admin/authors');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$authors = Authors::all()->find($id);
		return view('backend.doctrines.authors.show', compact('authors'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$authors = Authors::all()->find($id);
		return view('backend.doctrines.authors.edit', compact('authors'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return 'Hello World!!!';
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return 'Hello World!!!';
	}

}
