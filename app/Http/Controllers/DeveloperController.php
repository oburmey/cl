<?php

namespace App\Http\Controllers;

use App\Country;
use App\Developer;
use App\Language;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $developers = Developer::with('country')->get();
        return view('index',['developers'=>$developers->toArray()]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function register(Request $request)
    {
        $this->validate($request,[
            'firstname' => 'string',
            'lastname' => 'string',
            'email' => 'email|unique:developers|max:255',
            'birthday' => 'date',
            'country_id' => 'required',
            'language_id' => 'required',
        ]);
        $developer =  new Developer();
        $developer->create($request);
        return redirect('/');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function form(Request $request)
    {
        $countries = Country::list();
        $languages = Language::list();
        return view('form',['countries'=>$countries,'languages'=>$languages]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $developer = Developer::find($id);
        return view('show',['developer'=>$developer]);
    }
}
