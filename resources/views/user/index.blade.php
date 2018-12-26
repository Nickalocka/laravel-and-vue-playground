@extends('layout.layout')

@section('main_body')

    <header class="header_page">
        <div class="wrapper_main-inner">
            <h1 class="page-title">
                Users
            </h1>
        </div>
    </header>

    <div class="wrapper_main-inner">

        @foreach($table_classes as $table_class)
            <div class="box _bordered mb-6">
                <table class="table {{ $table_class }}">
                    <colgroup>
                        <col data-th="Name">
                        <col data-th="Email">
                        <col data-th="Phone">
                        <col data-th="City">
                        <col data-th="Postcode">
                        <col style="width: 39px;">
                    </colgroup>
                    <thead>
                    <tr>
                        <th>
                            Name
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Phone
                        </th>
                        <th>
                            City
                        </th>
                        <th>
                            Postcode
                        </th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>
                                {{ $user->first_name }} {{ $user->second_name }}
                            </td>
                            <td>
                                {{ $user->email }}
                            </td>
                            <td>
                                {{ $user->phone }}
                            </td>
                            <td>
                                {{ $user->city }}
                            </td>
                            <td>
                                {{ $user->postcode }}
                            </td>
                            <td>
                                <a class="link-primary">
                                    <i class="fas fa-search"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endforeach
    </div>
@endsection