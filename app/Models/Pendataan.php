<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendataan extends Model
{
    use HasFactory;
    public $table = "pendataans";

    protected $fillable = [
        'dataots_id',
        'jenis',
        'tgl_dtg',
        'kiriman',
        'alasan',
        'status',
        'pendataan_id',
    ];
    public function dataot()
    {
        return $this->belongsTo(DataOt::class, 'dataots_id');
    }
    public function laporan()
    {
        return $this->hasOne(Laporan::class, 'pendataan_id');
    }
}

