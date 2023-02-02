<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nft;
use App\Models\Category;

class HomeController extends Controller
{
    public function index(){
        return view('index',[
            'nfts' => Nft::latest()->take(4)->get(),
            'categories' => Category::latest()->take(6)->get()
        ]);
    }
}
