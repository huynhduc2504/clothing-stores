<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;


class Customers extends Model
{
    use HasFactory;
    protected $table = 'customer';
    protected $primaryKey = 'Id';
    public $incrementing = true;

    protected $fillable = [
        'Id',
        'Username',
        'Password',
        'Email',
        'Address',
        'Phone',
        'Permission',
        'updated_at',
        'created_at',
        'Permission'
    ];

    public function comment(){
        return $this->hasMany(Comment::class, 'user_id', 'Id');
    }
}
