@extends('layouts.app')
@section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="row">
            <div class="col-xl-12">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
               <span class="input-group-text">
                    <i class="fa fa-user"></i>
                </span>
                        </div>
                        <input id="name" type="text"
                               class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                               name="name"
                               placeholder="Name"
                               value="{{ old('name') }}"
                               required
                               autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback"
                                  role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
               <span class="input-group-text">
                    <i class="fa fa-user"></i>
                </span>
                        </div>
                        <input id="email"
                               type="email"
                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                               name="email"
                               value="{{ old('email') }}"
                               placeholder="Email"
                               required>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback"
                                  role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
               <span class="input-group-text">
                    <i class="fa fa-user"></i>
                </span>
                        </div>
                        <input id="password"
                               type="password"
                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                               name="password"
                               placeholder="Password"
                               required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
               <span class="input-group-text">
                    <i class="fa fa-user"></i>
                </span>
                        </div>
                        <input id="password-confirm"
                               type="password"
                               class="form-control"
                               placeholder="Confirm Password"
                               name="password_confirmation"
                               required>
                    </div>
                </div>
            </div>

            
            <div class="col-xl-12">
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-3">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
