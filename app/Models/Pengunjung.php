<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    use HasFactory;

    protected $fillable = ['id_divisi', 'nama', 'alamat', 'nomor', 'tujuan'];

    public function divisi()
    {
        return $this->belongsTo(Divisi::class, 'id_divisi');
    }
}
