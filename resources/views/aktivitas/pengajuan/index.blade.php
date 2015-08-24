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
                        @if(Auth::check() && Auth::user()->name == 'SUPERVISOR')
                            <tr>
                                <th class="text-center">Kode</th>
                                <th class="text-center">Pengaju</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Kuantitas</th>
                                <!-- <th class="text-center">Keterangan</th> -->
                                <th class="text-center">Status</th>
                                <th class="text-center">Pilihan</th>
                            </tr>
                            @foreach($data as $row)
                                <tr class="text-center">
                                    <td>{{$row['id']}}</td>
                                    <td>{{$row['pengaju']}}</td>
                                    <td>{{$row['nama']}}</td>
                                    <td>{{$row['kuantitas']}}</td>
                                    <!-- <td>{{$row['keterangan']}}</td> -->
                                    @if($row['status'] == 'Diterima')
                                        <td><span class="label label-success">{{$row['status']}}</span></td>
                                    @elseif($row['status'] == 'Ditolak')
                                        <td><span class="label label-danger">{{$row['status']}}</span></td>
                                    @else
                                        <td><span class="label label-default">{{$row['status']}}</span></td>
                                    @endif
                                        <td>
                                            <div class="col-md-2 col-md-offset-3">
                                                {!! Form::open(['url' => 'pengajuan/diterima/'.$row->id, 'class' => 'form-horizontal']) !!}
                                                    <button class="btn btn-success btn-sm">Terima</button>
                                                {!!Form::close()!!}
                                            </div>
                                            <div class="col-md-2 col-md-offset-1">
                                                {!! Form::open(['url' => 'pengajuan/ditolak/'.$row->id, 'class' => 'form-horizontal']) !!}
                                                  <button class="btn btn-danger btn-sm">Tolak</button>
                                                {!!Form::close()!!}
                                            </div>
                                        </td>
                                </tr>
                        @endforeach
                        @elseif(Auth::check())
                            <tr>
                                <th class="text-center">Kode</th>
                                <th class="text-center">Pengaju</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Kuantitas</th>
                                <!-- <th class="text-center">Keterangan</th> -->
                                <th class="text-center">Status</th>
                            </tr>
                            @foreach($pengajuanuser as $row)
                                <tr class="text-center">
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->pengaju}}</td>
                                    <td>{{$row->nama}}</td>
                                    <td>{{$row->kuantitas}}</td>
                                    <!-- <td>{{$row->keterangan}}</td> -->
                                    @if($row->status == 'Diterima')
                                        <td><span class="label label-success">{{$row->status}}</span></td>
                                    @elseif($row->status == 'Ditolak')
                                        <td><span class="label label-danger">{{$row->status}}</span></td>
                                    @else
                                        <td><span class="label label-default">{{$row->status}}</span></td>
                                    @endif
                                </tr>
                            @endforeach
                            @endif
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