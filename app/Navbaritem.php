<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Navbaritem extends Model
{
    public function getPathAttribute(){
        $url = $this->logoPath;
        if(stristr($this->logoPath , 'http') === false){
            $url = 'storage/'. $this->logoPath;
        }
        return $url;
    }
}
