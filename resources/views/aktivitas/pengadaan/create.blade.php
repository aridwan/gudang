@extends('app')

@section('css')
    {!! HTML::style('css/bootstrap-datepicker.css') !!}
    <style type="text/css" media="screen">
        td input.qty {
            max-width: 120px;
        }
    </style>
@endsection

@section('title')
    Pengadaan Barang
@endsection

@section('content')
    <br>
    <div class="well well-sm">
        <ul class="nav nav-pills nav-justified">
            <li>{!!link_to('pengadaan/index','List')!!}</li>
            <li class="active">{!!link_to('pengadaan/create','Tambah')!!}</li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Form Pengadaan Barang</div>
                <div class="panel-body">
                    {!! Form::open(['url' => 'pengadaan/store', 'class' => 'form-horizontal']) !!}
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group">
                        <label class="col-md-2 control-label">Nomor Pengadaan</label>
                        <label class="col-md-1 control-label">PD-{{$id}}</label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Penerima Barang</label>
                        <div class="col-md-3">
                            <input class="form-control" name="penerima" placeholder="Nama Penerima">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Tanggal Pengadaan
                        </label>
                        <div class="col-md-3">
                            <input data-provide="datepicker" class="datepicker form-control" placeholder=" 2017-12-31" name="tanggal" value="{{$tanggal}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2">Catatan</label>
                        <div class="col-md-6">
                            <textarea class="form-control" name="catatan">{{Form::old('catatan')}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <table class="table table-striped" id="tabelForm">
                                <tr>
                                    <th class="text-center">Kode Barang</th>
                                    <th class="text-center">Kuantitas</th>
                                    <th class="text-center"><button type="button" class="btn btn-sm btn-default btn-tambah glyphicon glyphicon-plus"></button></th>
                                    <th></th>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-10 col-md-2">
                            <button type="submit" class="btn btn-primary btn-block">
                                Submit
                            </button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    {!! HTML::script('js/bootstrap-datepicker.js') !!}
    <script id="jsource" type="text/javascript">
        var iter = 0;
        function appendRow() {
            $("#tabelForm").append($("<tr />").append(
                    $("<td />").append(
                            $('<select class="selectized" name="barpeng['+ iter +'][barang_id]" />')
                                    @foreach($data as $row)
                                    .append('<option value="{{$row['id']}}">{{$row['id'].' - '.$row['nama']}}</option>')
                            @endforeach
                        ),
                            $("<td />").append('<input type="text" class="form-control" name="barpeng['+ iter +'][kuantitas]">'),
                            $("<td class='text-center'/>").append('<button type="button" class="btn btn-sm btn-danger delete-column glyphicon glyphicon-remove"></button>').click(function() {
                                $(this).parent().remove();
                            })
                    ));
            iter = iter+1;
        }
        function on(){
            $(".selectized").selectize({
                create:true,
                sortField: 'text'
            });
        }
        $(".btn-tambah").click(function() {
            appendRow();
            on();
        });

        $(document).ready(function(){
            // appendRow();
        });
    </script>
@endsection