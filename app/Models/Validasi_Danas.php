<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Validasi_Danas extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'kampanye_id',
        'id_donatur',
        'name',
        'no_hp',
        'payment_amount',
        'payment_date',
    ];

    protected $table = 'validasidana';
    public function campaign()
    {
        return $this->belongsTo(Kampayes::class, 'kampanye_id');
    }
}
