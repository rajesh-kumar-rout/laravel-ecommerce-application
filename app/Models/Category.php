<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $fillable = ['name', 'parent_id'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
