<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
    protected $guarded = [];

    protected $fillable = ['author_id', 'name', 'location', 'nearest_mrt', 'phone', 'website', 'active', 'last_order'];

    public function review()
    {
        return $this->hasOne('App\Reviews','on_locations');
    }

    public function reviews()
    {
        return $this->hasMany('App\Reviews','on_locations');
    }

    public function author()
    {
        return $this->belongsTo('App\User','author_id');
    }

    public function image_files()
    {
        return $this->hasMany('App\News_image_files','dir');
    }
}
