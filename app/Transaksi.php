<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
	protected $table 	= 'transaksi';
    protected $fillable = ['user_id','kendaraan_id', 'tanggal_pinjam', 'tanggal_kembali', 'total_harga'];
}
