<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kandidat;

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

    public function kandidat()
    {
        return $this->belongsTo(Kandidat::class, 'kandidat_id');
    }


}
