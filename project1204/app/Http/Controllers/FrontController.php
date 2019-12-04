<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class FrontController extends Controller
{
    public function index(){

        return view('front.index');

    }
    public function about(){
        $test=DB::table('news')->get();
        return view('front.about',compact('test'));

    }
    public function news(){
        $name='Mars';
        return view('front.news',compact('name'));

    }
    public function product(){
        $dogs=DB::table('products')->get();
        return view('front.product',['dogs'=>$dogs]);

    }
    public function contact(){

        return view('front.contact');

    }

}
