<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Laundry;

class Shop extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'name',
        'location',
        'city',
        'delivery',
        'pickup',
        'whatsapp',
        'description',
        'price',
        'rate',
    ];

    public function promos()
    {
        return $this->hasMany(Laundry::class);
    }
}
