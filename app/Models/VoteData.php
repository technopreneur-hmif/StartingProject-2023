<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoteData extends Model
{
    use HasFactory;
    protected $table = 'VoteDatas';
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
