<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $table = 'jurusans';

    protected $fillable = [
        'token_jurusan', 'nama_jurusan', 'kode_jurusan', 'fakultas_id', 'deskripsi'
    ];

    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class);
    }
}
