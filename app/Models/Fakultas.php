<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    use HasFactory;

    protected $table = 'fakultas';
    protected $primaryKey = 'id';

    protected $fillable = [
        'token_fakultas',
        'nama_fakultas',
        'kode_fakultas',
    ];

    public function getRouteKeyName()
    {
        return 'token_fakultas';
    }

    public function jurusans()
    {
        return $this->hasMany(Jurusan::class);
    }
}
