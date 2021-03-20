<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    public $fillable = ['name', 'fuel', 'city', 'seat', 'price', 'available', 'image'];
}
