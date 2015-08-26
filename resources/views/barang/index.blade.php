@extends('app')

@section('title')
    Barang
@endsection

@section('content')

    <br>
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

                <div class="panel-heading">Barang</div>
                @if(sizeof($data))
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th class="text-center">Kode</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Keterangan</th>
                            <th class="text-center">Stok Awal</th>
                            <th class="text-center">Pengadaan</th>
                            <th class="text-center">Pemakaian</th>
                            <th class="text-center">Stok Sekarang</th>
                            <th class="text-center">Pilihan</th>
                        </tr>
                        @foreach($data as $row)
                            <tr class="text-center">
                                <td>{{$row['id']}}</td>
                                <td>{{$row['nama']}}</td>
                                <td>{{$row['keterangan']}}</td>
                                <td>{{$row['kuantitas']}}</td>
                                <td>{{$row['pengadaan']}}</td>
                                <td>{{$row['pemakaian']}}</td>
                                <td>{{$row['kuantitas']+$row['pengadaan']-$row['pemakaian']}}</td>
                                <td class="text-center">
                                    {!!link_to('barang/edit/'.$row['id'], 'Ubah', ['class' => 'btn btn-primary btn-sm'])!!}
                                    {!!link_to('barang/destroy/'.$row['id'], 'Hapus', ['class' => 'btn btn-danger btn-sm'])!!}
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