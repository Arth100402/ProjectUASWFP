<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_transaction', 'transaction_id', 'product_id')->withPivot('quantity','price');
    }

    public function insertProduct($cart,$user)
    {
        $total=0;
        foreach ($cart as $id => $detail)
        {
            $total += $detail['price'] * $detail['quantity'];
            $this->products()->attach($user->id,['quantity' =>$detail['quantity'], 'price' => $detail['price']]);
        }
        return $total;
    }
}
