<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    /**
     * @return array
     */
   public static function list(){
       $collections = self::all();
       $list = [];
       foreach ($collections as $item){
           $list[$item->id]=$item->language;
       }
       return $list;
   }
}
