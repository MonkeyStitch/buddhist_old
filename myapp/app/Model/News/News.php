<?php namespace App\Model\News;

use Illuminate\Database\Eloquent\Model;

class News extends Model {

	protected $table = 'news';

	protected $fillable = ['category_id', 'title', 'date', 'details', 'picture', 'reference'];

	protected $dates = ['date'];



	// ตั้งชื่อ function ให้ตรงกับ attribute foreign key ของ table news (category_id)
	// relationship one to many
	// one category has many news
	public function category() {
		return $this->belongsTo('App\Model\News\CategoryNews');
	}





}
