<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk'; 
    protected $primaryKey= 'id_produk';
    protected $keyType= 'int';

    protected $fillable=[
        'id_kategori', 
        'nama_produk',
        'stok_produk',
        'harga_produk'
    ];

    public function kategori(){
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
}
