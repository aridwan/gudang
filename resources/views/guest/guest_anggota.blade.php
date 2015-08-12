@extends('app')

@section('title')
    Anggota
@endsection

@section('content')

    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Anggota</div>
                @if(sizeof($data))
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th class="text-center">NIP</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Unit Organisasi</th>
                            <th class="text-center">Email</th>
                        </tr>
                        @foreach($data as $row)
                            <tr class="text-center">
                                <td>{{$row['nip']}}</td>
                                <td>{{$row['nama']}}</td>
                                <td>{{$row['jabatan']}}</td>
                                <td>{{$row['email']}}</td>
                            </tr>
                        @endforeach
                    </table>
                @else
                    <div class="panel-body">
                        Data Anggota kosong.
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection