<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nft;
use Illuminate\Support\Facades\Storage;

class DashboardNftController extends Controller
{
    public function index(){
        return view('dashboard.nft.index',[
            'nfts' => Nft::latest()->get()
        ]);
    }

    public function delete($id){
        $nft = Nft::firstWhere('id', $id);

        if ($nft->img) {
            Storage::delete($nft->img);
        }

        $nft->delete();

        flash()->addSuccess('Berhasil Menghapus NFT');
        return redirect('/dashboard/nft');
    }
}
