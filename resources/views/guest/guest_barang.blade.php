@extends('app')

@section('title')
    Barang
@endsection

@section('content')

    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Barang</div>
                @if(sizeof($data))
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th class="text-center">Kode</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Satuan</th>
                            <th class="text-center">Jumlah Barang Tersedia</th>
                        </tr>
                        @foreach($data as $row)
                            <tr class="text-center">
                                <td>{{$row['id']}}</td>
                                <td>{{$row['nama']}}</td>
                                <td>{{$row['keterangan']}}</td>
                                <td>{{$row['kuantitas']+$row['pengadaan']-$row['pemakaian']}}</td>
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