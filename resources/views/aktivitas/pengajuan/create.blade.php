@extends('app')

@section('title')
    Pengajuan Barang
@endsection

@section('content')
<br>
<div class="well well-sm">
    <ul class="nav nav-pills nav-justified">
        <li>{!!link_to('pengajuan/index','List')!!}</li>
        <li class="active">{!!link_to('pengajuan/create','Tambah')!!}</li>
    </ul>
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">Masukkan Data Barang</div>
            <div class="panel-body">
                {!! Form::open(['url' => 'pengajuan/store', 'class' => 'form-horizontal']) !!}
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
                    <label class="col-md-4 control-label">Nama Pengaju</label>
                    <div class="col-md-6">
                        <input class="form-control" placeholder="Nama Pengaju" name="pengaju" type="text" value="{{Auth::user()->name}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Nama Barang</label>
                    <div class="col-md-6">
                        <input class="form-control" placeholder="Nama Barang" name="nama" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Kuantitas</label>
                    <div class="col-md-6">
                        <input class="form-control" placeholder="Kuantitas" name="kuantitas" type="text">
                    </div>
                </div>
<!--                 <div class="form-group">
                    <label class="col-md-4 control-label">Keterangan </label>
                    <div class="col-md-6">
                        <input class="form-control" placeholder="Keterangan" name="keterangan" type="text">
                    </div>
                </div> -->
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