<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowerdetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_peminjam',
        'id_buku',
        'tgl_peminjaman',
        'tgl_pengembalian',
        'keterangan'
    ];

    // Optional: Define relationships if needed, e.g., with Book or Borrower
    public function book()
    {
        return $this->belongsTo(Book::class, 'id_buku');
    }

    public function borrower()
    {
        return $this->belongsTo(Borrower::class, 'id_peminjam');
    }
}