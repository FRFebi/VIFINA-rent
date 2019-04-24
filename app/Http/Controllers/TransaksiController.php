<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kendaraan;
use Auth;
use App\User;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id		= Auth::user()->id;
    	$kendaraan	= Kendaraan::find($id);

    	$request->validate([
    		'tanggal_pinjam' 	=> 'required',
    		'tanggal_kembali'	=> 'required',
    		'total'				=> 'required',
    		'kendaraan_id'		=> 'required'
    	]);

    	$transaksi = new Transaksi;

    	$transaksi->create([
    		'user_id'			=> $user_id,
    		'tanggal_pinjam'	=> $request->get('tanggal_pinjam'),
    		'tanggal_kembali'	=> $request->get('tanggal_kembali'),
    		'total'				=> $request->get('total'),
    		'kendaraan_id'		=> $request->get('kendaraan_id')
    	]);

    	return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	$user 		= Auth::user();
    	$kendaraan	= Kendaraan::find($id);

        return view('pembayaran', compact('user','kendaraan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
