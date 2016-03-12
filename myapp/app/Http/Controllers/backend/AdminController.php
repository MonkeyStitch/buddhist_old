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

	public function news($page = 1){
		$heading = 'ข่าวและกิจกรรม';
		$records = News::all()->count();
		$news 	 = [];

		if((!is_numeric($page)) || ($page <= 0)){
			return redirect('admin/news/1');
		} else if($page > ceil($records/10)) {
			return redirect('admin/news/' . ceil($records/10));
		}

		foreach(News::all() as $item => $value){
			if($item >= (($page-1)*10) && $item < (($page-1)*10)+10){
				$news[] = $value;
			}
		}

		return view('backend.news.read', compact('heading', 'records', 'news', 'page'));
	}


}
