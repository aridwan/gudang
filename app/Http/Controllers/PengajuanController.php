<?php

namespace App\Http\Controllers;

use App\PengajuanBarang;
use Illuminate\Http\Request;

use DB;
use Auth;
use App\Barang;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = PengajuanBarang::all();
        $pengajuanuser = DB::table('pengajuan_barangs')->where('pengaju','=',Auth::user()->nama)->get();
        return view('aktivitas.pengajuan.index', compact('data','pengajuanuser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('aktivitas.pengajuan.create');
    }

    public function diterima($id)
    {
        $pesanan = PengajuanBarang::find($id);
        $pesanan->status = 'Diterima';
        $pesanan->save();
        Barang::firstOrCreate(['nama' => $pesanan['nama']]);
        return redirect('pengajuan/index');
    }

    public function ditolak($id)
    {
        $pesanan = PengajuanBarang::find($id);
        $pesanan->status = 'Ditolak';
        $pesanan->save();
        return redirect('pengajuan/index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $fill = $request->all();
        if(is_numeric($fill['kuantitas']))
        {
            PengajuanBarang::create($fill);
            //dd($fill);
            return redirect()->action('PengajuanController@index');
        }
        else
        {
            return redirect()->back()->withErrors(['Kuantitas harus berupa angka']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
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
        $data = PengajuanBarang::find($id);
        $data->delete();
        return redirect()->action('PengajuanController@index');
    }
}
