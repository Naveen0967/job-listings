@extends('layouts.app')
@section('content')
    <form method="POST" action="{{ route('password.email') }}">
        {{ csrf_field() }}
        <p class="text-muted"></p>
        <div>
            {{ csrf_field() }}
            <div class="form-group has-feedback">
                <input type="email"
                       name="email"
                       class="form-control form-control-alternative"
                       required="autofocus"
                       placeholder="{{ trans('global.login_email') }}">
                @if($errors->has('email'))
                    <em class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </em>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-right">
                <button type="submit" class="btn btn-primary btn-block">
                    {{ trans('global.reset_password') }}
                </button>
            </div>
        </div>
    </form>
@endsection
