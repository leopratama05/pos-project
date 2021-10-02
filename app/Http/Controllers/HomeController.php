<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //passing data user, categories, product
        $c['categories'] = Category::count();
        $c['product']= Product::count();
        $c['user'] = User::count();
        return view('home', $c);
    }
    public function adminPage()
    {
        return view('layouts.adminHome');
    }
}
