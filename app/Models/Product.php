<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'image_name'
    ];

    public function getFilePathAttribute()
    {
        return '/product_images/' . $this->image_name;
    }
}
