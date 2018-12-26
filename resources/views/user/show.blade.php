@extends('layout.layout')

@section('main_body')

    <header class="header_page">
        <div class="wrapper_main-inner">
            <h1 class="page-title">
                User - {{ $user->first_name }} {{ $user->second_name }}
            </h1>
        </div>
    </header>

    <div class="wrapper_main-inner">



    </div>
@endsection