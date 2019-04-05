<?php

namespace App\Http\Controllers;

use Session;
use App\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index(){
        return view('settings')->with('settings' , Setting::first());
    }

    public function update(){
        $this->validate(request(),[
           'name' => 'required',
           'email' => 'required',
            'keywords' => 'required',
            'description' => 'required',
            'maintenance_message' => 'required'
        ]);
        $settings = Setting::first();

        $settings->name = request()->name;
        $settings->email = request()->email;
        $settings->keywords = request()->keywords;
        $settings->description = request()->description;
        $settings->maintenance_message = request()->maintenance_message;
        $settings->save();

        return redirect()->back();
    }
}
