<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'category_id', 'title', 'description','image'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getGetResumenAttribute()
    {
        return substr($this->description, 0, 150);
    }

    public function getGetImagenAttribute()
    {
        if ($this->image) {
            return url("storage/$this->image");
        }        
    }
}
