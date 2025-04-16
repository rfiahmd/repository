<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    use HasFactory;

    protected $table = 'fakultas';

    protected $fillable = [
        'token_fakultas',
        'nama_fakultas',
        'kode_fakultas',
        'deskripsi',
    ];

    public function jurusans()
    {
        return $this->hasMany(Jurusan::class);
    }
}
