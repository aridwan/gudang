<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title')
    </title>

    {!! HTML::style('css/bootstrap.min.css') !!}
    {!! HTML::style('css/bootstrap.css') !!}
    {!! HTML::style('css/bootswatch.min.css') !!}
    {{--{!! HTML::style('css/jquery-ui.structure.min.css') !!}--}}
    {{--{!! HTML::style('css/jquery-ui.theme.min.css') !!}--}}
    {{--{!! HTML::style('css/jquery.appendGrid-1.5.2.css') !!}--}}
    @yield('css')
    {!! HTML::style('css/my-style.css') !!}

    <!-- Fonts -->
    <!--link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://localhost:8000"><span><img src="http://localhost:8000/images/Logo Kecil.jpg"></span> Gudang ATK</a>
                <!--<img src="c:\xampp\htdocs\trustline\trustline\resources\assets\image">-->

            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    @if(Auth::check())

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Data Barang<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>{!!link_to('barang/index', 'List')!!}</li>
                                <li>{!!link_to('barang/create', 'Tambah')!!}</li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Data Anggota<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>{!!link_to('anggota/index', 'List')!!}</li>
                                <li>{!!link_to('anggota/create', 'Tambah')!!}</li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Aktivitas<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>{!!link_to('pesanan/index', 'Pesanan Barang')!!}</li>
                                <li>{!!link_to('pengadaan/index', 'Pengadaan Barang')!!}</li>

                            </ul>
                        </li>

                    @endif

                </ul>

                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li>{!!link_to('auth/login', 'Login')!!}</li>
                        <li>{!!link_to('auth/register', 'Register')!!}</li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>{!!link_to('auth/logout', 'Logout')!!}</li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <!-- Scripts -->
    {!! HTML::script('js/jquery.min.js') !!}
    {!! HTML::script('js/bootstrap.min.js') !!}
    {!! HTML::script('js/bootswatch.min.js') !!}
    {!! HTML::script('js/bootswatch.js') !!}

    {!! HTML::script('js/jquery-1.11.1.min.js') !!}
    {!! HTML::script('js/jquery-ui-1.11.1.min.js') !!}
    {!! HTML::script('js/jquery.appendGrid-1.5.2.js') !!}
    @yield('js')
</div>
</body>
</html>
