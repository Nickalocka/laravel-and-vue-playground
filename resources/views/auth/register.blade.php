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

        <form method="POST" action="{{ route('register') }}" class="width-lg mb-6">
            @csrf

            <div class="row">
                <div class="col">
                    <div class="form-group{{ $errors->has('first_name') ? ' _error' : '' }}">
                        <label>
                            <span class="input-label">First Name</span>
                            <input type="text" name="first_name" value="{{ old('first_name') }}" required>
                        </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group{{ $errors->has('second_name') ? ' _error' : '' }}">
                        <label>
                            <span class="input-label">Second Name</span>
                            <input type="text" name="second_name" value="{{ old('second_name') }}" required>
                        </label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group{{ $errors->has('email') ? ' _error' : '' }}">
                        <label>
                            <span class="input-label">Email</span>
                            <input type="text" name="email" value="{{ old('email') }}" required autocomplete="email">
                        </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group{{ $errors->has('phone') ? ' _error' : '' }}">
                        <label>
                            <span class="input-label">Phone Number</span>
                            <input type="text" name="phone" value="{{ old('phone') }}" required>
                        </label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group{{ $errors->has('address_1') ? ' _error' : '' }}">
                        <label>
                            <span class="input-label">Address</span>
                            <input type="text" name="address_1" required>
                            <input type="text" name="address_2">
                            <input type="text" name="address_3">
                        </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group{{ $errors->has('city') ? ' _error' : '' }}">
                        <label>
                            <span class="input-label">City</span>
                            <input type="text" name="city" required>
                        </label>
                    </div>

                    <div class="form-group{{ $errors->has('postcode') ? ' _error' : '' }}">
                        <label>
                            <span class="input-label">Postcode</span>
                            <input type="text" name="postcode" required>
                        </label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group{{ $errors->has('password') ? ' _error' : '' }}">
                        <label>
                            <span class="input-label">Password</span>
                            <input type="password" name="password" required autocomplete="new-password">
                        </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group{{ $errors->has('password_confirmation') ? ' _error' : '' }}">
                        <label>
                            <span class="input-label">Confirm Password</span>
                            <input type="password" name="password_confirmation" required autocomplete="new-password">
                        </label>
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

@endsection