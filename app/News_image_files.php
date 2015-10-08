<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News_image_files extends Model
{
    protected $guarded = [];
    protected $fillable = ['dir','filename','extension','size'];
    public $timestamps = false;

    public function post()
    {
        return $this->belongsTo('App\News','on_news');
    }
}
