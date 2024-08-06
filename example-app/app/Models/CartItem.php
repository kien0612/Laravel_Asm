<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'id_san_pham',
        'quantity',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function Sampham()
    {
        return $this->belongsTo(Sampham::class);
    }
}
