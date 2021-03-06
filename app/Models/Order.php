<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        'price' => 'integer'
    ];

    public function path() {
        return '/orders/' . $this->id;
    }


    public function getTextStatusAttribute()
    {
        if($this->status) return 'Ожидает';
        if($this->status === false) return 'В пути';
        return 'Отменен';
    }
}
