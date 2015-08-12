<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;

use Auth;
use DB;
use App\PesananBarang;
use App\BarangTerpesan;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PesananController extends Controller
{

    protected $pesananBarang;
    protected $barangPesanan;
    protected $barang;


    public function __construct(PesananBarang $pesanan, Barang $barang, BarangTerpesan $barangPesanan)
    {
        $this->pesananBarang = $pesanan;
        $this->barangPesanan = $barangPesanan;
        $this->barang = $barang;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = PesananBarang::all();
        $pesananuser = DB::table('pesanan_barangs')->where('pemesan','=',Auth::user()->name)->get();
//        dd($pesananuser);
        return view('aktivitas.pesanan.index', compact('data','pesananuser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $id = $this->pesananBarang->max('id');
        $id = $id === null ? 1 : $id + 1;

        $data = Barang::all();
        return view('aktivitas.pesanan.create', compact('data','id'));
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
//         dd($all['barpes']);

        $pesananFill = $this->pesananBarang->getFillable();
        $pesanan = $this->pesananBarang->firstOrCreate($request->only($pesananFill));

        // dd($all);
        foreach($all['barpes'] as $barpes) {
            $barang_id = array_pull($barpes, 'barang_id');
            $pesanan->barangs()->attach($barang_id, $barpes);
        }
        return redirect('pesanan/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $pesananBarang=$this->pesananBarang->find($id);
//        dd($pesananBarang->barangs);
        return view('aktivitas/pesanan/show',compact('pesananBarang'));
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
