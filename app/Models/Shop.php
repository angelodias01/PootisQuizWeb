<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_name',
        'price',
        'image'     //image in the shop (to be added)
    ];

    public $timestamps = false;
}
?>
