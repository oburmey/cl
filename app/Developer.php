<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Developer extends Model
{
    /**
     * @param Request $request
     */
    public function create(Request $request){
        $this->firstname = $request->firstname;
        $this->lastname = $request->lastname;
        $this->email = $request->email;
        $this->country_id = $request->country_id;
        $this->language_id = $request->language_id;
        $this->birthday = strtotime($request->birthday);
        $this->save();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function country()
    {
        return $this->hasOne('App\Country','id','country_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function language()
    {
        return $this->hasOne('App\Language', 'id', 'language_id');
    }
}
