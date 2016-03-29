<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Intervention\Image\Image as Img;

use Image; // at the top of the file. Of course if you added to aliases

class ImagesController extends Controller {

	//
	public function __construct() {
		//
	}

	public function getItbdlst($folderIn = null, $file = null){
		// images/news/20160321-210120-icon.png
		$ds = DIRECTORY_SEPARATOR;
		$folder = '';

		foreach( explode('-', $folderIn) as $value ) {
			$folder .= ($ds . $value);
		}
		
		$path = 'images' . $folder . $ds . $file;

		//do so other checks here if you wish
		if(!file_exists($path)) {
			abort(404, 'ไม่พบไฟล์');
		}

		// use Image::make();
		$img = Image::make($path);
		$img->resize(120, 120);


		// is $_GET['spx'] return boolean
		if($this->is_GET()){
			$size = $this->subStrToSize();
			$img->resize($size['width'], $size['height']);
		}
		
		return $img->response();
//		return $folder . ' file :: ' . $file . ' $_GET[\'spx\'] ' . (isset($_GET['spx']) ? $_GET['spx'] : null);
	}


	public function getNotImage($size = 120) {
		$img = Image::make('img/no_image.jpg');
		$img->resize($size, $size);
		return $img->response();
	}




	private function is_GET() {
		return (isset($_GET['spx']) && $_GET['spx'] !== '');
	}

	private function getSPX() {
		if(!$this->is_GET()){
//			abort(404, 'Page not found.');
			return 's200x200'; // default
		}
		return $_GET['spx'];
	}

	private function subStrToSize() {
		$arr = array();
		$str = $this->getSPX();
		$strFirst = substr( $str, 0, 1);
		$str = substr($str, 1, strlen($str));
		// cut x
		list($width, $height)	= explode('x', $str);
		$arr = compact('strFirst', 'width', 'height');
		//
		return $arr;
	}

}
