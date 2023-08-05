<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    public $table = "laporans";
        protected $fillable = [
            'dataots_id',
            // 'pendataan_id',
            'tgl_dtg',
            'status',

        ];
    public function dataot()
    {
        return $this->belongsTo(DataOt::class, 'dataots_id');

    }

    public function pendataan()
    {
        return $this->belongsTo(Pendataan::class, 'pendataan_id');
    }
}
