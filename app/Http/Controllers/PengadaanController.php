<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PengadaanBarang;
use App\Barang;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PengadaanController extends Controller
{
    protected $pengadaan;


    public function __construct(PengadaanBarang $pengadaan)
    {
        $this->pengadaan = $pengadaan;
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

        $id = $this->pengadaan->max('id');
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
        //
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
        //
    }
}
