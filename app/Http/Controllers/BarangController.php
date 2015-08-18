<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Barang;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Barang::get([
            'id',
            'nama',
            'kuantitas',
            'keterangan'
        ])->toArray();
        //return view('pre', compact('data'));
        return view('barang.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('barang.create');
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
        Barang::create($fill);
        //dd($fill);
        return redirect()->action('BarangController@index');
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
        $data = Barang::find($id);
        return view('barang.edit', compact('data'));
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
        $fill = $request->all();
//        dd($fill);
        Barang::find($id)->update($fill);
        return redirect()->action('BarangController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $barang = Barang::find($id);
        if ($barang->used == 0)
        {
            $barang->delete();
            return redirect()->action('BarangController@index');
        }
        else
        {
            return redirect()->back()->withErrors(['Barang sudah digunakan, tidak dapat dihapus!']);
        }

    }
}
