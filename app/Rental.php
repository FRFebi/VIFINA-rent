<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
	protected $table = 'rentals';
    protected $fillable = ['nama','alamat'];

    public function kendaraans(){
    	return $this->belongsToMany('App\Kendaraan', 'supply', 'rental_id', 'kendaraan_id');
    }
}
