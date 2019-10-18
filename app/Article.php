<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function tags(){

        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    protected $fillable = [
        'imgPath', 'titre', 'text', 'published', 'user_id', 'category_id'
    ];
    
    
}
