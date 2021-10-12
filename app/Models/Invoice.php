<?php

namespace App\Models;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'invoice',
        'customer_id',
        'courier',
        'service',
        'cost_courier',
        'weight',
        'name',
        'phone',
        'province',
        'city',
        'address',
        'status',
        'snap_token',
        'grand_total',
    ];

    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
