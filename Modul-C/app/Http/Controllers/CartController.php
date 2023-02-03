<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        return view('cart',[
            'carts' => Cart::where('user_id', auth()->user()->id)->latest()->get()
        ]);
    }

    public function store($id_nft){
        Cart::create([
            'user_id' => auth()->user()->id,
            'nft_id' => $id_nft
        ]);

        flash()->addSuccess('Nft Berhasil disimpan di keranjang');
        return redirect('/cart');
    }

    public function delete($id){
        Cart::firstWhere('id', $id)->delete();

        flash()->addSuccess('Nft Berhasil dihapus dari keranjang');
        return redirect('/cart');
    }
}
