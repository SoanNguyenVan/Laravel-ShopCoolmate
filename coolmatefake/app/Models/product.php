<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
      'name', 'price', 'sale_price', 'description', 'content','product_image','product_images','token'
      
    ];
}
