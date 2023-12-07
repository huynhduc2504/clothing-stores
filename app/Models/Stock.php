<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $table = 'stockquantities';
    protected $primaryKey = 'Id';
    // public $incrementing = true;

    protected $fillable = [
        'Id',
        'Quantity',
        'idClothes',
        'idColor',
        'idSize',
    ];
}
