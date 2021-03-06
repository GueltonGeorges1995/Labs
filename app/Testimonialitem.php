<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonialitem extends Model
{
    public function getPathAttribute(){
        $url = $this->imgPath;
        if(stristr($this->imgPath , 'http') === false){
            $url = 'storage/'. $this->imgPath;
        }
        return $url;
    }
}
