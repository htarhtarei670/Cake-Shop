<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CakeShopController extends Controller
{
   public function home(){
    return view('home');
   }

    // cake page
    public function cakePage(){
        return view('cakesPage');
    }

    // about Page
    public function aboutpage(){
        return view('aboutPage');
    }

    //blog page
    public function blogPage(){
        return view('blog');
    }

    // contactPage
    public function contactPage(){
        return view('contact');
    }
}