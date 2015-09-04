<?php

namespace App\Http\Controllers;

use App\PesananBarang;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Barang;
class LaporanPesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Barang::all();
        return view('laporan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Request $request)
    {
        $data = $request->all();
//        dd($data);
        $tanggal_mulai = $data['tanggal_mulai'];
        $tanggal_selesai = $data['tanggal_selesai'];
        $barang = $data['barang_id'];
        $query = PesananBarang::hydrateRaw(
            'SELECT
                *
            FROM
                pesanan_barangs,
                barangs,
                barang_terpesans
            WHERE
                pesanan_barangs.id = barang_terpesans.pesanan_barang_id
                AND barang_terpesans.barang_id = barangs.id
                AND pesanan_barangs.tanggal >="'.$tanggal_mulai.'"
                AND pesanan_barangs.tanggal <"'.$tanggal_selesai.'"
                AND barang_terpesans.barang_id='.$barang);
//        dd($query);
        return view('laporan/show', compact('query'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @
     * return Response
     */
    public function destroy($id)
    {
        //
    }
}
