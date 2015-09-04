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
                            <th class="text-center">Pemesan</th>
                            <th class="text-center">Tanggal</th>
                            <th class="text-center">Nomor Pesanan</th>
                            <th class="text-center">Kuantitas</th>
                        </tr>
                        @foreach($query as $row)
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">{{$row['pemesan']}}</td>
                                <td class="text-center">{{$row['tanggal']}}</td>
                                <td class="text-center">{{$row['id']}}</td>
                                <td class="text-center">{{$row['kuantitas']}}</td>
                            </tr>
                        @endforeach
                    </table>
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