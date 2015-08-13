@extends('app')

@section('title')
    Pesanan Barang
@endsection

@section('content')
    <div class="well well-sm">
        <ul class="nav nav-pills nav-justified">
            <li class="active">{!!link_to('pesanan/index','List')!!}</li>
            <li>{!!link_to('pesanan/create','Tambah')!!}</li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <div class="panel-heading">Pesanan Barang</div>
                @if(Auth::user()->name == 'SUPERVISOR')
                        @if(sizeof($data))
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th class="text-center">Nomor</th>
                                    <th class="text-center">Tanggal</th>
                                    <th class="text-center">Pemesan</th>
                                    <th class="text-center">Pilihan</th>
                                </tr>
                                @foreach($data as $row)
                                    <tr class="text-center">
                                        <td>{{$row['id']}}</td>
                                        <td>{{$row['tanggal']}}</td>
                                        <td>{{$row['pemesan']}}</td>
                                        <td class="text-center">
                                            {!!link_to('pesanan/show/'.$row['id'], 'show', ['class' => 'btn btn-default btn-sm'])!!}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            <div class="panel-body">
                                Data pesanan barang kosong.
                            </div>
                        @endif
                @else
                    <div class="panel-heading">Pesanan Barang</div>
                        @if(sizeof($pesananuser))
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th class="text-center">Nomor</th>
                                    <th class="text-center">Tanggal</th>
                                    <th class="text-center">Pemesan</th>
                                    <th class="text-center">Pilihan</th>
                                </tr>
                                @foreach($pesananuser as $row)
                                    <tr class="text-center">
                                        <td>{{$row->id}}</td>
                                        <td>{{$row->tanggal}}</td>
                                        <td>{{$row->pemesan}}</td>
                                        <td class="text-center">
                                            {!!link_to('pesanan/show/'.$row->id, 'show', ['class' => 'btn btn-default btn-sm'])!!}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            <div class="panel-body">
                                Data pesanan barang Anda kosong.
                            </div>
                        @endif
                    </div>
                @endif
        </div>
    </div>
@endsection