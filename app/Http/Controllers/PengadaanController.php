<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PengadaanBarang;
use App\Barang;
use App\BarangTerima;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PengadaanController extends Controller
{
    protected $pengadaanBarang;
    protected $barang;
    protected $barangTerima;

    public function __construct(PengadaanBarang $pengadaan, Barang $barang, BarangTerima $barangTerima)
    {
        $this->pengadaanBarang = $pengadaan;
        $this->barang = $barang;
        $this->barangTerima = $barangTerima;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = PengadaanBarang::all();
        return view('aktivitas.pengadaan.index', compact('data'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $id = $this->pengadaanBarang->max('id');
        $id = $id === null ? 1 : $id + 1;
        $data = Barang::all();
        return view('aktivitas.pengadaan.create', compact('data','id'));

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
        $all = $request->all();
//         dd($all);

        $pengadaanFill = $this->pengadaanBarang->getFillable();
        $pengadaan = $this->pengadaanBarang->firstOrCreate($request->only($pengadaanFill));

        // dd($all);
        foreach($all['barpeng'] as $barpeng) {
            $addedItem = Barang::find($barpeng['barang_id']);
            $addedItem['kuantitas'] += $barpeng['kuantitas'];
            Barang::find($barpeng['barang_id'])->update($addedItem->toArray());
            $barang_id = array_pull($barpeng, 'barang_id');
            $pengadaan->barangs()->attach($barang_id, $barpeng);
        }
        return redirect('pengadaan/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        
        $pengadaanBarang=$this->pengadaanBarang->find($id);
        return view('aktivitas/pengadaan/show',compact('pengadaanBarang'));
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
}
