<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function type()
    {
        return $this->belongsTo(Type::class,'type_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class,'brand_id');
    }

    public function transactions()
    {
        return $this->belongsToMany(Transaction::class, 'product_transaction', 'product_id', 'transaction_id')->withPivot('quantity','price');
    }
}
