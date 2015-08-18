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

                <div class="col-md-4 col-md-offset-4">
                    
                </div>
                
                @if(Auth::check())
                    <div class="panel-body  col-md-2 col-md-offset-5">
                        <img  src="http://localhost/gudang/public/images/Lamp1.jpg">
                        You are logged in!
                    </div>
                    <div class="panel-body">
                        <marquee>
                            <font color="blue" size="6">
                                Selamat Datang di Gudang ATK - PT. PLN (Persero) ...
                            </font>
                        </marquee>
                    </div>
                @else

                <div class="panel-body"> 
                    <div class="col-md-4 col-md-offset-4">
                    <span><img src="http://localhost/gudang/public/images/Cover.jpg"></span>
                    </div>
                    <div class="col-md-2 col-md-offset-6">    
                        Please login!
                    </div>

                </div>

                @endif
            </div>
        </div>
    </div>
@endsection
