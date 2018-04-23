<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = array();
//    protected $with = ['user'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images() {
        return $this->morphMany(Image::class, "imageble");
    }


}
