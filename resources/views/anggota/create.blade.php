@extends('app')

@section('title')
    Anggota
@endsection

@section('content')
    <br>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Masukkan data anggota</div>
                <div class="panel-body">
                    {!! Form::open(['url' => 'anggota/store', 'class' => 'form-horizontal']) !!}
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="form-group">
                        <label class="col-md-4 control-label">NIP</label>
                        <div class="col-md-6">
                            <input class="form-control" placeholder="NIP" name="nip" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Nama Anggota</label>
                        <div class="col-md-6">
                            <input class="form-control" placeholder="Nama Anggota" name="nama" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Email</label>
                        <div class="col-md-6">
                            <input class="form-control" placeholder="Email" name="email" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Departemen</label>
                        <div class="col-md-6">
                            <select class="form-control chosen-select" name="jabatan">
                                <option value="ADMINISTRASI DAN UMUM">ADMINISTRASI DAN UMUM</option>
                                <option value="STAFF AHLI">STAFF AHLI</option>
                                <option value="FASILITAS OPERASI">FASILITAS OPERASI</option>
                                <option value="SIE TELEKOMUNIKASI">SIE TELEKOMUNIKASI</option>
                                <option value="PELAKSANA PENGADAAN">PELAKSANA PENGADAAN</option>
                                <option value="OPERASI SISTEM-DISPATCHER">OPERASI SISTEM-DISPATCHER</option>
                                <option value="OPERASI SISTEM">OPERASI SISTEM</option>
                                <option value="PERENCANAAN DAN EVALUASI OPERASI SISTEM">PERENCANAAN DAN EVALUASI OPERASI SISTEM</option>
                                <option value="SIE STRATEGI OPERASI SISTEM">SIE STRATEGI OPERASI SISTEM</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Password</label>
                        <div class="col-md-6">
                            <input class="form-control" placeholder="Password" name="password" type="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Confirm Password</label>
                        <div class="col-md-6">
                            <input class="form-control" placeholder="Confirm Password" name="confirm_password" type="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-8">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection