<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mycontroller extends Controller
{
    //
    public function display(){
        return "Hello from Controller display";
    }
    public function showMessage(){
        return "<h1>Hello from Controller showMessage</h1>";
    }
}
