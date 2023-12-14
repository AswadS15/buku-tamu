<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function Pesan()
    {
        return $this->hasMany(Pesan::class);
    }

    public function Divisi()
    {
        return $this->belongsTo(Divisi::class, 'id_divisi');
    }
}
