@extends('app')

@section('title')
    Pengajuan Barang
@endsection

@section('content')

    <br>
    <div class="well well-sm">
        <ul class="nav nav-pills nav-justified">
            <li class="active">{!!link_to('pengajuan/index','List')!!}</li>
            <li>{!!link_to('pengajuan/create','Tambah')!!}</li>
        </ul>
    </div>

    <div class="row">
        <div class="col-md-12">
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

                <div class="panel-heading">Pengajuan Barang</div>
                @if(sizeof($data))
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th class="text-center">Kode</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Keterangan</th>
                            <th class="text-center">Pilihan</th>
                        </tr>
                        @foreach($data as $row)
                            <tr class="text-center">
                                <td>{{$row['id']}}</td>
                                <td>{{$row['nama']}}</td>
                                <td>{{$row['keterangan']}}</td>
                                <td class="text-center">
                                    {!!link_to('pengajuan/edit/'.$row['id'], 'Ubah', ['class' => 'btn btn-primary btn-sm'])!!}
                                    {!!link_to('pengajuan/destroy/'.$row['id'], 'Hapus', ['class' => 'btn btn-danger btn-sm'])!!}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                @else
                    <div class="panel-body">
                        Data barang kosong.
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection