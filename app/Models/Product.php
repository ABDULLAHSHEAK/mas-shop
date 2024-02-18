<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function brand()
    {
        return $this->BelongsTo(Brand::class);
    }
    public function category()
    {
        return $this->BelongsTo(Category::class);
    }
}
