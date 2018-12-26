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
                <table class="table {{ $table_class }} _stack-md">
                    <colgroup>
                        <col>
                        <col>
                        <col>
                        <col>
                        <col>
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
                        <th colspan="2">
                            Postcode
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td data-th="Name:">
                                {{ $user->first_name }} {{ $user->second_name }}
                            </td>
                            <td data-th="Email:">
                                {{ $user->email }}
                            </td>
                            <td data-th="Phone:">
                                {{ $user->phone }}
                            </td>
                            <td data-th="City:">
                                {{ $user->city }}
                            </td>
                            <td data-th="Postcode:">
                                {{ $user->postcode }}
                            </td>
                            <td data-th="View:" class="align-right">
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