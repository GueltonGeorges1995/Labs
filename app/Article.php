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
    
    public function getPathAttribute(){
        $url = $this->imgPath;
        if(stristr($this->imgPath , 'http') === false){
            $url = 'storage/'. $this->imgPath;
        }
        return $url;
    }

    public function commentaire(){
        return $this->hasMany(commentaire::class,'article_id','id');
    }

    public function category(){
        return $this->hasMany(category::class,'id','category_id');
    }
}


