<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\DayInWeek;

class CustomValidateControler extends Controller
{
    public function getCustom()
    {
    	return view('customValidate');
    }

    public function postCustom(Request $request)
    {
    	$input = request()->validate([
                'name' => 'required',
                'thu' => [
                    'required', 
                    new DayInWeek()
                ]
            ]);
    	 dd("You can proceed now...");
    }
}
