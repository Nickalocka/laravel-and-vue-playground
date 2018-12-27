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

        @foreach($table_classes as $table_class)
            <div class="box _bordered mb-6">
                <header class="box-header">
                    <h1 class="box-title">Class: table {{ $table_class }}</h1>
                </header>
                <user-table
                        :class="{{ json_encode($table_class) }}"
                        :users="{{  $users }}"
                ></user-table>
            </div>
        @endforeach
    </div>
@endsection