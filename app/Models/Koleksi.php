<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

    // Nama    : Dimas Dwi Kurniawan
    // NIM     : 6706220041
    // Kelas   : D3IF-4603 


class Koleksi extends Model
{
    use HasFactory;
   
    protected $table = 'koleksi';
    
    protected $fillable = [
        'namaKoleksi',
        'jenisKoleksi', 
        'jumlahKoleksi',
        'jumlahKeluar',
        'jumlahSisa'
    ];
}