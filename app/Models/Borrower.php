<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_anggota',
        'no_transaksi',
        'tgl_pinjam'
    ];

    public function member()
    {
        return $this->belongsTo(Member::class, 'id_anggota', 'id', 'nama_anggota');
    }

    public function book()
    {
        return $this->belongsTo(Book::class, 'judul');
    }
}
