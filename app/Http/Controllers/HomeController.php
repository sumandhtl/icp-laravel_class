<?php

namespace App\Http\Controllers;

use App\Models\GenderModel;


use Illuminate\Http\Request;

class HomeController extends Controller
{

    function index(){
        $data = GenderModel::get();

        return view('welcome', compact('data'));
    }

    function aboutIndex(){
        return view('about');
    }

    function saveStudentData(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
            'phone' => 'required|max:10',
            'g-recaptcha-response' => 'required'
        ]);

        DB::table('contact')->insert([
            'name' => $request->get('name'),
            'phone' => $request->get('phone'),
            'email'  => $request->get('email'),
            'message'   => $request->get('message')
        ]);

        return back()->with('success','Thank you for your query. We will contact you soon via mail or call');
    }
}
