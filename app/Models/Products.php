<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'clothes';
    protected $primaryKey = 'Id';
    public $incrementing = true;
    public $timestamps = true; 

    protected $fillable = [
        'Id',
        'Name',
        'Description',
        'Price',
        'ImageURL',
        'IdSize',
        'IdColor',
        'IdCategories',
        'updated_at',
        'created_at',
    ];


}
