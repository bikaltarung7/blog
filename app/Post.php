<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public function author()
    {
        return $this->belongsTo(User::class);
    }


    public function getImageUrlAttirbute($value)
    {
        $imageUrl = '';
        if( ! is_null($this->image))
        {
            $imagepath = public_path() . "/img/" . $this->image;
            if(file_exists($imagepath)) $imageUrl = asset("img/" . $this->image);
        }

        return $imageUrl;
    }

    public function getDateAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    public function scopelatestFirst()
    {
        return $this->orderBy('created_at','desc');
    }
}
