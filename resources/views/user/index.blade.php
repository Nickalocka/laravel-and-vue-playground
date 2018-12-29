@extends('layout.layout')

@section('main_body')

    <header class="header_page">
        <div class="wrapper_main-inner">
            <h1 class="page-title">
                Users (table example)
            </h1>
        </div>
    </header>

    <div class="wrapper_main-inner">
        <user-table
                :users="{{ $users }}"
                :class="'box _bordered mb-6'"
        ></user-table>
    </div>
@endsection