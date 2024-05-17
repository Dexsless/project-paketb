<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    public function koperasi()
    {
        return $this->hasMany(Koperasi::class, 'mahasiswa_id', 'nama');
    }
}
