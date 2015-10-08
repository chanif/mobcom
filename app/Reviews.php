<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    protected $guarded = [];

    protected $fillable = ['on_locations', 'from_user', 'body', 'recommend'];

    public function author()
    {
        return $this->belongsTo('App\User','from_user');
    }

    public function locations()
    {
        return $this->belongsTo('App\Locations','on_locations');
    }
}
