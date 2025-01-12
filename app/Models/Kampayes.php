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
        'f_ktp',
        'lampiran',
        'perposal',
        'status',
        'start_date',
        'end_date',
    ];

    public function penggalang()
    {
        return $this->belongsTo(User::class, 'id_penggalang');
    }

    public function donations()
    {
        return $this->hasMany(Validasi_Danas::class, 'kampanye_id');
    }

    protected $table = 'kampanye';
}
