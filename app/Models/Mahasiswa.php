<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = [
        'nama',
        'matkul_id'
        'semester',
    ];

    public function Mata_Kuliah(){
        return $this->hasMany(Mata_kuliah::class);
    }
}
