@extends('app')

@section('title')
    {{--@parent--}}
    Home
@stop

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <br>
            <div class="panel panel-default">
                <div class="panel-heading">Silahkan Login</div>
                    <div class="panel-body">
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
                        {!! Form::open(['url' => 'auth/login', 'class' => 'form-horizontal', 'method' => 'post']) !!}
                        {!! csrf_field() !!}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">NIP</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-8">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <!--<a href="/password/email">Forgot Your Password?</a>-->
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>                        
            </div>
        </div>
    </div>
@endsection