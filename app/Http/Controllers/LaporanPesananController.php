<?php

namespace App\Http\Controllers;

use App\PesananBarang;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

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
    protected $exportData;
    protected $mulai;
    protected $selesai;


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
        $this->exportData = $query;
//        dd($query->toArray());
        return view('laporan/show', compact('query','tanggal_mulai','tanggal_selesai','barang'));
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

    public function export(Request $request)
    {
        $data = $request->all();
//        dd($data);
        $query = PesananBarang::hydrateRaw(
            'SELECT
                pesanan_barangs.pemesan,pesanan_barangs.tanggal,pesanan_barangs.id as nomor_pesanan,barang_terpesans.kuantitas
            FROM
                pesanan_barangs,
                barangs,
                barang_terpesans
            WHERE
                pesanan_barangs.id = barang_terpesans.pesanan_barang_id
                AND barang_terpesans.barang_id = barangs.id
                AND pesanan_barangs.tanggal >="'.$data['mulai'].'"
                AND pesanan_barangs.tanggal <"'.$data['selesai'].'"
                AND barang_terpesans.barang_id='.$data['barang'].'')->toArray();
//        dd($query);
        Excel::create('laporanpesanan', function($excel) use($query){
            $excel->sheet('Sheetname', function($sheet) use($query) {
                $sheet->fromArray($query
                );
            });
        })->export('xls');
    }
}
