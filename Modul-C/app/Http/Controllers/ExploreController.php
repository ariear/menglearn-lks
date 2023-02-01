<?php

namespace App\Http\Controllers;

use App\Models\Nft;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    public function index(Request $request){
        $nfts = Nft::latest()->get();

        if ($request->search) {
            $nfts = Nft::where('name','like','%' . $request->search . '%')->latest()->get();
        }

        return view('explore',[
            'nfts' => $nfts
        ]);
    }
}
