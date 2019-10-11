<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Introitem extends Model
{
    public function getPathAttribute(){
        $url = $this->imgPathIntro;
        if(stristr($this->imgPathIntro , 'http') === false){
            $url = 'storage/'. $this->imgPathIntro;
        }
        return $url;
    }
}
