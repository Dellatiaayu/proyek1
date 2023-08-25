<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataOt extends Model
{
    use HasFactory;
    public $table = "data_ots";

    protected $guarded = ['id'];

    protected $fillable = [
        'nik','nama','ttl','alamat','jk','no_telp','dokumen','gambar'
    ];

    public function pendataan()
    {
        return $this->hasMany(Pendataan::class);
    }

    public function laporan()
    {
        return $this->hasMany(Laporan::class);
    }
}
