<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Nft;
use Illuminate\Http\Request;

class NftController extends Controller
{
    public function create(){
        return view('create',[
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request){
        $validasi = $request->validate([
            'name' => 'required',
            'img' => 'required|image',
            'author' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'desc' => 'required'
        ]);

        if ($request->file('img')) {
            $validasi['img'] = $request->file('img')->store('img');
        }
        $validasi['slug'] = str()->slug($validasi['name']);

        Nft::create($validasi);

        flash()->addSuccess('Nft Berhasil Ditambahkan');
        return redirect('/explore');
    }

    public function detail($id){
        return view('detail',[
            'nft' => Nft::firstWhere('id',$id)
        ]);
    }
}
