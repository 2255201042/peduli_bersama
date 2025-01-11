<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kampayes extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_admin',
        'id_penggalang',
        'title',
        'deskripsi',
        'target_dana',
        'gambar',
        'start_date',
        'end_date',
    ];

    protected $table = 'kampanye';
}
