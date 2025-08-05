<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $fillable = [
        'user_id',
        'purchasable_type',
        'purchasable_id',
        'quantity',
        'price',
    ];

    public function purchasable()
    {
        return $this->morphTo();
    }
}
