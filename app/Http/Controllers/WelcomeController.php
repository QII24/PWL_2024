<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{


    public function greeting(){
        return view('hello')
        ->with('name','Rifqi Sabilillah')
        ->with('occupation','Doctor');
}
}
