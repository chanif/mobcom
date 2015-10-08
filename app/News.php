<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model {

	protected $guarded = [];

	protected $fillable = ['author_id', 'title', 'body', 'slug', 'active'];

	public function comments()
	{
		return $this->hasMany('App\Comments','on_news');
	}

    public function image_files()
    {
        return $this->hasOne('App\News_image_files','dir');
    }

	public function author()
	{
		return $this->belongsTo('App\User','author_id');
	}

}
