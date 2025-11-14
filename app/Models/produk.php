<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{  
    protected $table = 'katalog_produk_tabel';
    
    // Primary key
    protected $primaryKey = 'produk_id';
    
    public $timestamps = false;
    
    protected $fillable = [
        'nama',
        'kategori',
        'harga'
    ];
    
    protected $guarded = ['produk_id'];
}
