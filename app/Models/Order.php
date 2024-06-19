<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function bahan()
    {
        return $this->belongsTo(Bahan::class);
    }
    public function laminasi()
    {
        return $this->belongsTo(Laminasi::class);
    }
    public function cutting()
    {
        return $this->belongsTo(Cutting::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function kas()
    {
        return $this->hasMany(Kas::class);
    }
}
