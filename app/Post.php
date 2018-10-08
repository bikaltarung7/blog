<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $guarded = [];
    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
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

    public function dateFormatted($showTimes = false)
    {
        $format = "d/m/Y";
        if($showTimes) $format = $format . " H:i:s";
        return $this->created_at->format($format);
    }
}
