@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid"> <a class="navbar-brand" href="{{route('spotify')}}">SpotifyApi</a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item"> <a class="nav-link active" aria-current="page" href="{{route('spotify')}}">Пошук</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('game')}}">Гра</a> </li>
{{--                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false"> Shop </a>--}}
{{--                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                            <li><a class="dropdown-item" href="#">Mobiles</a></li>--}}
{{--                            <li><a class="dropdown-item" href="#">Laptops</a></li>--}}
{{--                            <li>--}}
{{--                                <hr class="dropdown-divider">--}}
{{--                            </li>--}}
{{--                            <li><a class="dropdown-item" href="#">Accessories</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                </ul>
                <form class="d-flex"> <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search"> <button class="btn btn-outline-success" type="submit">Search</button> </form>
            </div>
        </div>
    </nav>
@endsection
