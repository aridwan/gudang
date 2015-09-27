<?php

namespace App\Http\Controllers;

use App\PengadaanBarang;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Barang;

class LaporanPengadaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Barang::all();
        return view('laporanpengadaan.index', compact('data'));
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
        $query = PengadaanBarang::hydrateRaw(
            'SELECT
                *
            FROM
                pengadaan_barangs,
                barangs,
                barang_terimas
            WHERE
                pengadaan_barangs.id = barang_terimas.pengadaan_barang_id
                AND barang_terimas.barang_id = barangs.id
                AND pengadaan_barangs.tanggal >= "'.$tanggal_mulai.'"
                AND pengadaan_barangs.tanggal < "'.$tanggal_selesai.'"
                AND barang_terimas.barang_id = '.$barang);
//        dd($query->toArray());
        return view('laporanpengadaan/show', compact('query','tanggal_mulai','tanggal_selesai','barang'));
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
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function export(Request $request)
    {
        $data = $request->all();
//        dd($data);
        $query = PengadaanBarang::hydrateRaw(
            'SELECT
                pengadaan_barangs.tanggal, pengadaan_barangs.id as nomor_pengadaan, barang_terimas.kuantitas
            FROM
                pengadaan_barangs,
                barangs,
                barang_terimas
            WHERE
                pengadaan_barangs.id = barang_terimas.pengadaan_barang_id
                AND barang_terimas.barang_id = barangs.id
                AND pengadaan_barangs.tanggal >="'.$data['mulai'].'"
                AND pengadaan_barangs.tanggal <"'.$data['selesai'].'"
                AND barang_terimas.barang_id='.$data['barang'].'');
//        dd($query);
        Excel::create('laporanpengadaan', function($excel) use($query){
            $excel->sheet('Sheetname', function($sheet) use($query) {
                $sheet->fromArray($query
                );
            });
        })->export('xls');
    }
}
