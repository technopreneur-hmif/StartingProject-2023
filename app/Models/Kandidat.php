<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Kandidat as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Kandidat extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'kandidats';
    protected $fillable = [
        'nama_kandidat',
        'tentang_kandidat',
        'prodi_Kandidat',
        'visi_kandidat',
        'misi_kandidat',
        'link_foto_kandidat'
    ];
}
