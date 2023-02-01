<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Nft;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function nft(){
        return $this->hasMany(Nft::class);
    }
}
