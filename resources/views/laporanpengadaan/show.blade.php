@extends('app')

@section('title')
    Laporan
@endsection

@section('content')
    <br>
    <br>
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
                @if(sizeof($query))
                <div class="col-md-10 col-md-offset-1">
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Tanggal</th>
                            <th class="text-center">Nomor Pengadaan</th>
                            <th class="text-center">Kuantitas</th>
                        </tr>
                        @foreach($query as $row)
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">{{$row['tanggal']}}</td>
                                <td class="text-center">{{$row['pengadaan_barang_id']}}</td>
                                <td class="text-center">{{$row['kuantitas']}}</td>
                            </tr>
                        @endforeach
                    </table>
                    {!! Form::open(['url' => 'laporanpengadaan/export', 'class' => 'form-horizontal']) !!}
                        <label class="col-md-4 control-label hidden">mulai</label>
                        <div class="col-md-6">
                            <input class="form-control hidden" name="mulai" type="text" value="{{$tanggal_mulai}}">
                        </div>
                        <label class="col-md-4 control-label hidden">selesai</label>
                        <div class="col-md-6">
                            <input class="form-control hidden" name="selesai" type=
                            "text" value="{{$tanggal_selesai}}">
                        </div>
                        <label class="col-md-4 control-label hidden">barang</label>
                        <div class="col-md-6">
                            <input class="form-control hidden" name="barang" type="text" value="{{$barang}}">
                        </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-default">
                               Export
                            </button>
                        </div>
                    </div>
                    {{--{!!link_to('laporanpesanan/export','Export', ['class' => 'btn btn-default btn-sm'])!!}--}}
                    {!! Form::close() !!}
                </div>
                @else
                    <div class="alert alert-danger">
                        Data tidak ditemukan
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection

@section('js')
@endsection