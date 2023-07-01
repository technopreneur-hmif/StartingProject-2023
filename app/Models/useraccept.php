<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class useraccept extends Model
{
    use HasFactory;

    protected $table = 'useraccepts';
    protected $fillable = [
        'nama_user',
        'email',
        'username',
        'password',
        'role',
        'id'
    ];

}
