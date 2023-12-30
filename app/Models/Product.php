<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    public $timestamps = FALSE;

    protected $fillable = ['nama_barang', 'satuan', 'hrg_jual', 'hrg_beli', 'stok'];

    protected $appends = ['profit'];

    public function getProfitAttribute()
    {
        return $this->hrg_jual - $this->hrg_beli;
    }
}
