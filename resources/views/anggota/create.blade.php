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
                            <input class="form-control" placeholder="Nama" name="nama" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Email</label>
                        <div class="col-md-6">
                            <input class="form-control" placeholder="Email" name="email" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Jabatan</label>
                        <div class="col-md-6">
                            <input class="form-control" placeholder="Jabatan" name="jabatan" type="text">
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
                            <input class="form-control" placeholder="confirm" name="confirm_password" type="password">
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