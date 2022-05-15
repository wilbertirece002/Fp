<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class Product extends Model
{
    use HasFactory;
    protected $fillable=['ProductName', 'ProductCode', 'Category', 'Description', 'Color', 'Size', 'Price'];
    public function category()
    {
       return $this->belongsTo(Product::class, 'Category');
    }
}
