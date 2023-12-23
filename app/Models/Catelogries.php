<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Catelogries extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $primaryKey = 'CategoryID';
    public $incrementing = true;

    protected $fillable = [
        'CategoryID ',
        'CategoryName',
        'updated_at',
        'created_at',
    ];

    public function FKProduct()
    {
        return $this->hasMany(Products::class,"IdCategories","CategoryID");
    }
}
