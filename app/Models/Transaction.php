<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    function user(){
        return $this->belongsTo(User::class);
    }

    function products(){
        return $this->belongsToMany(Product::class)->withPivot(["quantity", "subtotal"]);
    }
}
