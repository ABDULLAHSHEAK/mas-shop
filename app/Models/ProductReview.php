<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'rating', 'customer_id', 'product_id'];

    public function profile()
    {
        return $this->BelongsTo(CustomerProfile::class);
    }
}
