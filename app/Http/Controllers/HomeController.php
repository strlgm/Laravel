<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
 
class HomeController extends Controller
{
    public function getIndex(){
        return View::make('inicio');
    }
    public function inicio(){
        return view('inicio');
    }

    public function proyecto(){
        return view('proyecto');
    }


 
 
}