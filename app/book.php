<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $table ='books';
    protected $fillable = ['title','authorid','amount','cover'];
    protected $visible = ['title','authorid','amount','cover'];
    public $timestamps = true;

    public function author()
    {
    	return $this->belongsTo('App\author','authorid');
    }
}
