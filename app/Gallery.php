<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $guarded = array();
    protected $with = ['images'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    public function images()
    {
    	return $this->morphMany(Image::class, 'imageble');
    }


}
