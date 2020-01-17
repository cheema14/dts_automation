<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InceptiveController extends Controller
{
    public function select_registration(){
        // echo "You are here at the moment";
        $data['title'] = "Registration Type";
        return view("registration.registration_selection.select_registration_type",$data);
    }
}
