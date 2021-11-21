<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'order';

    protected $guarded = [];

    public function detail()
    {
        return $this->hasMany(OrderDetail::class, 'order_id', 'id');
    }

    public function status()
    {
        return $this->hasOne(OrderStatus::class, 'id', 'order_status');
    }

    public function method()
    {
        return $this->hasOne(PaymentMethod::class, 'id', 'payment_id');
    }
}
