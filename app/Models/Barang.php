<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barangs';
    protected $primaryKey = 'no';
    public $incrementing = false;
    protected $fillable = [
        'no',
        'nama_barang',
        'harga_sewa',
        'stok'
    ];
}
