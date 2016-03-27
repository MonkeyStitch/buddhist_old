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
//		all()->chunk(10); แบ่งข้อมูลเป็นช่วงตามที่กำหนด เช่น 10
//		all()->contains(1) ตรวจสอบข้อมูลว่ามีหรือไม่ ถ้ามี return true ถ้าไม่มี return false
//		all()->where('category_id', 3)->sortByDesc('id')->take(1)

		$news = News::all()->sortByDesc('id')->take(2);

//dd($news1);

		return view('backend.home', compact('news'));
//		return $news3;
	}

	

}
