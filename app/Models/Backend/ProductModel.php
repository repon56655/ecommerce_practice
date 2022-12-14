<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'name',
        'category_name',
        'brand_name',
        'description',
        'image',
        'price',
        'status'
    ];
}
