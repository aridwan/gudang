@extends('app')

@section('title')
    Pengadaan
@endsection

@section('content')
    <div class="well well-sm">
        <ul class="nav nav-pills nav-justified">
            <li>{!!link_to('pengadaan/index','List')!!}</li>
            <li>{!!link_to('pengadaan/create','Tambah')!!}</li>
        </ul>
    </div>
    <div class="roP">
        <div class="col-md-offset-1 col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">Detail Pengadaan Barang</div>
                <div class="panel-body">
                    @if(sizeof($pengadaanBarang))
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nomor Pengadaan </label>
                            <div class="col-md-2">
                                <label class="control-label">PS-{{$pengadaanBarang->id}}</label>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Penerima Barang</label>
                            <div class="col-md-2">
                                <label class="control-label">{{$pengadaanBarang->penerima}}</label>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Tanggal Pengadaan</label>
                            <div class="col-md-2">
                                <label class="control-label">{{$pengadaanBarang->tanggal}}</label>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Catatan</label>
                            <div class="col-md-2">
                                <label class="control-label">{{$pengadaanBarang->catatan}}</label>
                            </div>
                        </div>
                        <br>
                        <table class="table table-hover">
                            <tr>
                                <th>Kode Barang</th>
                                <th>Kuantitas</th>

                            </tr>
                            @foreach($pengadaanBarang->barangs as $data)
                                <tr>
                                    <td>{{$data->id.' - '.$data->nama}}</td>
                                    <td>{{$data->pivot->kuantitas}}</td>
                                </tr>
                            @endforeach
                        </table>
                        <br>
                        
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection