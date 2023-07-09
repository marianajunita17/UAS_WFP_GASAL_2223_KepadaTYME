<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    function brands(){
        return $this->belongsTo(Brand::class);
    }

    function types(){
        return $this->belongsTo(Type::class);
    }

    function transactions(){
        return $this->belongsToMany(Transaction::class)->withPivot(["quantity", "subtotal"]);
    }
}
