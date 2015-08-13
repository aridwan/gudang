<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Anggota;
use App\Barang;
use Auth;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Guard;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function __construct(Guard $auth)
    {
//        $this->middleware('guest', ['except' => ['getLogout', 'getProfile', 'postProfile']]);
        $this->auth = $auth;
    }


    public function index()
    {
        return view('user/home');
    }

    public function barang()
    {
        $data = Barang::all();
        return view('guest/guest_barang', compact('data'));
    }

    public function anggota()
    {
        $data = Anggota::all();
        return view('guest/guest_anggota', compact('data'));
    }

    public function passwordEdit()
    {
        $data = User::find(Auth::user()->id);
//        dd($data);
        return view('guest/guest_password', compact('data'));
    }

    public function passwordUpdate(Request $request, $id)
    {
        $this->validate($request, [
            'password' => 'required|same:password',
        ]);
        $old = $request->input('password');
        $new = $request->input('password2');
        if (Hash::check($old, $this->auth->user()->password) && $new == $request['password_ulangi']) {
            $this->auth->user()->password = Hash::make($new);
            $this->auth->user()->save();
            return redirect('/home');
        }
        return redirect()->back()->withErrors(['Password lama salah atau ulangi password berbeda']);
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
