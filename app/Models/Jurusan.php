<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $table = 'jurusan';
    protected $guarded = [];

    public function fakultas() {
        return $this->belongsTo(Fakultas::class, 'fakultas_id');
    }
}
