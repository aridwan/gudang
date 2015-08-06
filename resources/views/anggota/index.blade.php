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
                            <th class="text-center">Jabatan</th>
                            <th class="text-center">pilihan</th>
                        </tr>
                        @foreach($data as $row)
                            <tr class="text-center">
                                <td>{{$row['nip']}}</td>
                                <td>{{$row['nama']}}</td>
                                <td>{{$row['jabatan']}}</td>
                                <td class="text-center">
                                    {!!link_to('anggota/edit/'.$row['id'], 'edit', ['class' => 'btn btn-primary btn-sm'])!!}
                                    {!!link_to('anggota/destroy/'.$row['id'], 'hapus', ['class' => 'btn btn-danger btn-sm'])!!}
                                </td>
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