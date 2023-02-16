<?php

namespace App\Http\Controllers;

use App\Models\GenderModel;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\DB;


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
            'full_name' => 'required',
            'gender' => 'required',
        ]);

        DB::table('student_data')->insert([
            'full_name' => $request->get('full_name'),
            'gender_id' => $request->get('gender'),
            'created_date' => date('Y-m-d H:i:s'),
            'created_by' => 1,
            'is_active' => 1,
        ]);

        return back()->with('success','Thank you for your query. We will contact you soon via mail or call');
    }
}
