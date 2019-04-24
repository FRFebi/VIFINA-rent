<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{

	protected $table = 'kendaraans';
    protected $fillable = ['nama','platno','harga','status','img'];

    public function users(){
    	return $this->belongsToMany(User::class);
    }

    public function rentals(){
    	return $this->belongsToMany('App\Rental', 'supply', 'rental_id', 'kendaraan_id');
    }

    public function jenis(){
    	return $this->belongsTo('App\Jenis');
    }
}
