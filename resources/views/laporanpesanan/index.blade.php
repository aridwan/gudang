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
    Laporan
@endsection

@section('content')
    <br>
    <br>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
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
                <div class="panel-heading text-center"><label>Pilih Filter Laporan</label></div>
                <div class="panel-body">
                    <div class="form-group">-</div>
                    <div class="form-group">-</div>
                    <div class="form-group">-</div>
                    {!! Form::open(['url' => 'laporanpesanan/show', 'class' => 'form-horizontal']) !!}
                        <div class="form-group">
                            <label class="col-md-4 control-label">Barang</label>
                            <div class="col-md-6">
                                <select class="selectized" name="barang_id">
                                    @foreach($data as $row)
                                        <option value="{{$row['id']}}">{{$row['nama']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Mulai tanggal</label>
                            <div class="col-md-6">
                                <input data-provide="datepicker" class="datepicker form-control" name="tanggal_mulai">
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Sampai tanggal</label>
                            <div class="col-md-6">
                                <input data-provide="datepicker" class="datepicker form-control" name="tanggal_selesai">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-8 col-md-2">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    {!! HTML::script('js/bootstrap-datepicker.js') !!}
    <script id="jsource" type="text/javascript">
        $('.selectized').selectize({
            create : true,
            sortField : 'text'
        });
    </script>
@endsection