<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catelogries extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $primaryKey = 'CategoryId';
    public $incrementing = true;

    protected $fillable = [
        'Id',
        'Name'
    ];
}
