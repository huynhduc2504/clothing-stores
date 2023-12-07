<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailOrder extends Model
{
    use HasFactory;
    protected $table = 'detailorder';
    protected $primaryKey = 'Id';
    public $incrementing = true;

    protected $fillable = [
        'Id',
        'Quantity',
        'Price',
        'IdOrder',
        'name',
        'idClothes',
        'idStock',
        'updated_at',
        'created_at'
    ];
}
