@extends('app')

@section('title')
    @parent
    Home
@stop

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <br>
            <div class="panel panel-default">
                <div class="panel-heading">Home</div>
                @if(Auth::check())
                    <div class="panel-body">
                        You are logged in!
                    </div>
                    <div class="panel-body">
                        <marquee>
                            <font color="blue" size="6">
                                Selamat Datang di Gudang ATK ...
                            </font>
                        </marquee>
                    </div>
                @else
                    <div class="panel-body">
                        Please login!
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
