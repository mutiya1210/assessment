<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen';
    protected $fillable = ['nama', 'nidn', 'jabatan'];

    // Jika ada relasi dengan model lain, dapat didefinisikan di sini
}
