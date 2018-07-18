<?php

namespace App\Http\Controllers;

use Request;

class Confirmation2Controller extends Controller
{
    public function postIndex()
    {
        if (\Auth::check()) {
            $user = \Auth::user();
            $carts = $user->carting;
           
            //carting : カートの中身
            $hotel = Request::input('hotel');
            $plan = Request::input('plan');
            
           
           
            $data = [
                'user' => $user,
                'carts' => $carts,
                'hotel' => $hotel,
                'plan' => $plan
            ];
        
    return view('confirmation.index', $data, compact('hotel'));
    }
}
}
