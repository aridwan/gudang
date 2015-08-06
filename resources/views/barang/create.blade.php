@extends('app')

@section('title')
    Barang
@endsection

@section('content')
<br>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">Masukkan data barang</div>
            <div class="panel-body">
                {!! Form::open(['url' => 'barang/store', 'class' => 'form-horizontal']) !!}
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
                    <label class="col-md-4 control-label">Nama Barang</label>
                    <div class="col-md-6">
                        <input class="form-control" placeholder="Nama" name="nama" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Kuantitas</label>
                    <div class="col-md-6">
                        <input class="form-control" placeholder="Kuantitas" name="kuantitas" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Keterangan </label>
                    <div class="col-md-6">
                        <input class="form-control" placeholder="keterangan" name="keterangan" type="text">
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