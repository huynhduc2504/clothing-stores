<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DetailOrder;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $primaryKey = 'Id';
    public $incrementing = true;

    protected $fillable = [
        'Id',
        'OrderDate',
        'TotalAmount',
        'IdCustomer',
        'name',
        'address',
        'note',
        'sdt',
        'updated_at',
        'created_at'
    ];

    public function FKDetail()
    {
        return $this->hasMany(DetailOrder::class,"IdOrder","Id");
    }
}
