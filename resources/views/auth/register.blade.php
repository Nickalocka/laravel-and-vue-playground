@extends('layout.layout')

@section('main_body')

    <header class="header_page">
        <div class="wrapper_main-inner">
            <h1 class="page-title">
                Register
            </h1>
        </div>
    </header>

    <div class="wrapper_main-inner">

        <div class="row">
            <div class="col _65p">
                <form method="POST" action="{{ route('register') }}" class="mb-6">
                    @csrf

                    <div class="row">
                        <div class="col">
                            <div class="form-group{{ $errors->has('first_name') ? ' _error' : '' }}">
                                <label>First Name</label>
                                <input type="text" name="first_name" value="{{ old('first_name') }}" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group{{ $errors->has('second_name') ? ' _error' : '' }}">
                                <label>Second Name</label>
                                <input type="text" name="second_name" value="{{ old('second_name') }}" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group{{ $errors->has('email') ? ' _error' : '' }}">
                                <label>Email</label>
                                <input type="text" name="email" value="{{ old('email') }}" required autocomplete="email">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group{{ $errors->has('phone') ? ' _error' : '' }}">
                                <label>Phone Number</label>
                                <input type="text" name="phone" value="{{ old('phone') }}" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group{{ $errors->has('address_1') ? ' _error' : '' }}">
                                <label>Address</label>
                                <input type="text" name="address_1" required>
                                <input type="text" name="address_2">
                                <input type="text" name="address_3">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group{{ $errors->has('city') ? ' _error' : '' }}">
                                <label>City</label>
                                <input type="text" name="city" required>
                            </div>

                            <div class="form-group{{ $errors->has('postcode') ? ' _error' : '' }}">
                                <label>Postcode</label>
                                <input type="text" name="postcode" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group{{ $errors->has('password') ? ' _error' : '' }}">
                                <label>Password</label>
                                <input type="password" name="password" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group{{ $errors->has('password_confirmation') ? ' _error' : '' }}">
                                <label>Confirm Password</label>
                                <input type="password" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                    </div>

                    <div class="align-right">
                        <button class="btn-primary" type="submit">
                            Register
                        </button>
                    </div>

                </form>
            </div>
            <div class="col _35p">
                <div class="box _shaded">
                    Some stuff here
                </div>
            </div>
        </div>


    </div>

@endsection