<?php

namespace App\Http\Controllers;

use Request;

class Selectplan2Controller extends Controller
{
     public function postIndex()
    {
        if (\Auth::check()) {
    
            $plan = Request::input('plan');
            
           
           
            $data = [
               
                'plan' => $plan,
            ];
        
    return view('hotelselect.index', $data, compact('plan'));
    }
}}
