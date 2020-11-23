<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model 
{
    use HasFactory;

    protected $tables = 'products';
    /**
     * The attribute that ara mass asignable
     * 
     * @var array
     */
    protected $fillable = [
        'name', 'price', 'description'
    ];
}
