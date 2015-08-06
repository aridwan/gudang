<?php

namespace App\Http\Controllers;

use App\Anggota;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Anggota::all();
        //return view('pre', compact('data'));
        return view('anggota.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('anggota.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $fill1['name'] = $data['nip'];
        $fill1['email'] = $data['email'];
        $fill1['password'] = bcrypt($data['password']) ;

        $fill2['nip'] = $data['nip'];
        $fill2['nama'] = $data['nama'];
        $fill2['jabatan'] = $data['jabatan'];

 //       dd($fill1,$fill2);
        User::create($fill1);
        Anggota::create($fill2);
        return redirect()->action('AnggotaController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $data = Anggota::find($id);
        return view('anggota.edit', compact('data'));
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
        Anggota::find($id)->update($fill);
        return redirect()->action('AnggotaController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $anggota = Anggota::find($id);
        $anggota->delete();
        return redirect()->action('AnggotaController@index');
    }
}
