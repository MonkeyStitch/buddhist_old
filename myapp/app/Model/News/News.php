<?php namespace App\Model\News;

use Illuminate\Database\Eloquent\Model;

class News extends Model {

	protected $table = 'news';

	protected $fillable = ['category_id', 'title', 'details', 'picture', 'by'];



	// ตั้งชื่อ function ให้ตรงกับ attribute foreign key ของ table news (category_id)
	public function category() {
		return $this->belongsTo('App\Model\News\CategoryNews');
	}

}
