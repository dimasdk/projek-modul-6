<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

    // Nama    : Dimas Dwi Kurniawan
    // NIM     : 6706220041
    // Kelas   : D3IF-4603 


class Transaksi extends Model
{
    use HasFactory;
    
    protected $table = 'transaksi';
    
    protected $fillable = [
        'idPetugas',
        'idPeminjam',
        'tanggalPinjam',
        'tanggalSelesai'
    ];
    public function petugas()
    {
        return $this->belongsTo(User::class, 'idPetugas');
    }
    public function peminjam()
    {
        return $this->belongsTo(User::class, 'idPeminjam');
    }
}