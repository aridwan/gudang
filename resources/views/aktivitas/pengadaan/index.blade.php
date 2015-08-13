@extends('app')

@section('title')
    Pengadaan Barang
@endsection

@section('content')
    <div class="well well-sm">
        <ul class="nav nav-pills nav-justified">
            <li class="active">{!!link_to('pengadaan/index','List')!!}</li>
            <li>{!!link_to('pengadaan/create','Tambah')!!}</li>
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
                <div class="panel-heading">Pengadaan Barang</div>
                @if(sizeof($data))
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th class="text-center">Nomor</th>
                            <th class="text-center">Tanggal</th>
                            <th class="text-center">Penerima</th>
                            <th class="text-center">Pilihan</th>
                        </tr>
                        @foreach($data as $row)
                            <tr class="text-center">
                                <td>{{$row['id']}}</td>
                                <td>{{$row['tanggal']}}</td>
                                <td>{{$row['penerima']}}</td>
                                <td class="text-center">
                                    {!!link_to('pengadaan/show/'.$row['id'], 'show', ['class' => 'btn btn-default btn-sm'])!!}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                @else
                    <div class="panel-body">
                        Data pengadaan barang kosong.
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection