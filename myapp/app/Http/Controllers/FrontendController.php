<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FrontendController extends Controller {


	public function __construct() {

	}

	public function index()
	{
		return view('frontend/index');
	}


}
