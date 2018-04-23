<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Image extends Model
{
    protected $fillable = ['url', 'imageble_id', 'imageble_type'];
    
    public function imageble() {
        return $this->morphTo();
    }

    public function setImagebleIdAttribute($value)
    {
        $this->attributes['imageble_id'] = $value;
        $this->attributes['user_id'] = Auth::id();
    }
 

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
