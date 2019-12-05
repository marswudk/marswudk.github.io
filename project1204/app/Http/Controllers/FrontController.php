<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index()
    {

        return view('front.index');

    }
    public function about()
    {
        $name = 'Mars';
        return view('front.about', compact('name'));

    }
    public function news()
    {
        $news = DB::table('news')->get();
        return view('front.news', compact('news'));

    }
    public function news_detail($id)
    {
        $news_detail = DB::table('news')->find($id);
        // dd($news_detail);
        return view('front.news_detail', compact('news_detail'));

    }
    public function product()
    {
        $dogs = DB::table('products')->get();
        return view('front.product', ['dogs' => $dogs]);

    }
    public function product_detail($id)
    {

        $dog_detail = DB::table('products')->where('id', $id)->first();

        return view('front.product_detail', compact('dog_detail'));

    }

    public function contact()
    {

        return view('front.contact');

    }

}
