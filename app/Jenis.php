<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
	protected $table 	= 'jenises';
    protected $fillable = ['nama'];

    public function kendaraans(){
    	return $this->hasMany('App\Kendaraan');
    }
}
