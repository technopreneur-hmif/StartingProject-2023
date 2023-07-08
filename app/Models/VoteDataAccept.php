<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoteDataAccept extends Model
{
    use HasFactory;
    protected $table = 'VoteDataAccepts';
    protected $fillable = [
        'nama_user',
        'email',
        'username',
        'password',
        'role',
        'id',
        'kandidat_id'
    ];
}
