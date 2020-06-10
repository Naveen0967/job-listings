@extends('layouts.app')
@section('content')

    @if(session()->has('message'))
        <p class="alert alert-info">
            {{ session()->get('message') }}
        </p>
    @endif

    <form method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <p class="text-muted">{{ trans('global.login') }}</p>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
               <span class="input-group-text">
                    <i class="fa fa-user"></i>
                </span>
            </div>

            <input name="email" type="text"
                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                   required
                   autofocus placeholder="{{ trans('global.login_email') }}"
                   value="{{ old('email', null) }}">
            @if($errors->has('email'))
                <div class="invalid-feedback">
                    {{ $errors->first('email') }}
                </div>
            @endif
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fa fa-lock"></i>
                </span>
            </div>
            <input name="password"
                   type="password"
                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                   required
                   placeholder="{{ trans('global.login_password') }}">
            @if($errors->has('password'))
                <div class="invalid-feedback">
                    {{ $errors->first('password') }}
                </div>
            @endif
        </div>

        <div class="input-group mb-4">
            <div class="custom-control custom-control-alternative custom-checkbox">
                <input class="custom-control-input"
                       name="remember"
                       id="remember"
                       type="checkbox">
                <label class="custom-control-label"
                       for="remember">
                    <span>{{ trans('global.remember_me') }}</span>
                </label>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <button type="submit"
                        class="btn btn-primary my-4">
                    {{ trans('global.login') }}
                </button>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-12">
                <a class="btn btn-link my-4"
                   href="{{ route('password.request') }}">
                    {{ trans('global.forgot_password') }}
                </a>
            </div>
        </div>
    </form>
@endsection
