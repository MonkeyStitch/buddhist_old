<?php namespace App\Model\News;

use Illuminate\Database\Eloquent\Model;

class CategoryNews extends Model {

	protected $table = 'category_news';

    protected $fillable = ['category'];


    /*
	 * relationship one to many
	 * many news has one category_news
	 */
    public function news() {
        return $this->hasMany('App\Model\News\News'); // namespace
    }

}
