@extends('app')

@section('title')
    Ubah Password
@endsection

@section('content')
    <br>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Ubah Password</div>
                <div class="panel-body">
                    {!! Form::open(['url' => 'guest_password/update/'.$data->id, 'class' => 'form-horizontal']) !!}
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group">
                        <label class="col-md-4 control-label">NIP</label>
                        <div class="col-md-6">
                            <input class="form-control" readonly name="name" type="text" value="{{$data->name}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Password Lama</label>
                        <div class="col-md-6">
                            <input class="form-control" name="password" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Password Baru</label>
                        <div class="col-md-6">
                            <input class="form-control" name="password2" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-8">
                            <button type="submit" class="btn btn-primary">
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