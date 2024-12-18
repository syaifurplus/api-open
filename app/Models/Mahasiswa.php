<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'mahasiswa';
    protected $guarded = ['id'];

    /**
     * Relasi ke model Progdi.
     */
    public function progdi()
    {
        return $this->belongsTo(Progdi::class);
    }
}
