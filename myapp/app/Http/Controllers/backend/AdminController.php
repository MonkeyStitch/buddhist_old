<?php namespace App\Http\Controllers\backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\News\News;
use Illuminate\Http\Request;

class AdminController extends Controller {

	public function __construct() {
		$this->middleware('auth');
	}

	public function index(){
		return redirect('admin/home');
	}

	public function home() {
		return view('backend.home');
//		return view('backend.read_main');
	}

	

}
