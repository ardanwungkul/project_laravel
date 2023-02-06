<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    use HasFactory;

    protected $table = 'no';
    protected $primaryKey = 'no';
    public $incrementing = false;
    protected $fillable = ['jumlah'];
}
