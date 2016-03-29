<?php namespace App\Model\Doctrines;

use Illuminate\Database\Eloquent\Model;

class Authors extends Model {

    protected $table = 'authors';

    protected $fillable = ['general_name', 'first_name', 'picture', 'note'];



}
