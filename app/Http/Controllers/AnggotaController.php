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

        $data = Anggota::get([
            'id',
            'nip',
            'nama',
            'jabatan',
            'email'
        ]);

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
        $this->validate($request,['password' => 'required|min:6|same:confirm_password']);
        $data = $request->all();
        $fill1['name'] = $data['nip'];
        $fill1['nama'] = $data['nama'];
        $fill1['password'] = bcrypt($data['password']) ;

        $fill2['nip'] = $data['nip'];
        $fill2['nama'] = $data['nama'];
        $fill2['email'] = $data['email'];
        $fill2['jabatan'] = $data['jabatan'];

//        dd($fill1,$fill2);
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
        $fillanggota['nip'] = $fill['nip'];
        $fillanggota['nama'] = $fill['nama'];
        $fillanggota['jabatan'] = $fill['jabatan'];
        $fillanggota['email'] = $fill['email'];
        
        // dd($fill);
        Anggota::find($id)->update($fillanggota);
        if($fill['password'] != null)
        {
            $data = User::find($id+1);
            $data->password = bcrypt($fill['password']);
            $data->save();  
        }
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
        $nip = $anggota['nip'];
        $anggota->delete();
        $user = DB::table('users')->where('name',$nip)->delete();
        return redirect()->action('AnggotaController@index');
    }
}
