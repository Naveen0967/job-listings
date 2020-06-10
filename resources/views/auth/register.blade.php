@extends('layouts.app')
@section('content')
    <form role="form" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
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
                    <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" placeholder="Mobile" value="{{ old('phone') }}" required autofocus>

                    @if ($errors->has('phone'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('phone') }}</strong>
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
                    <input id="qualification" type="text" class="form-control{{ $errors->has('qualification') ? ' is-invalid' : '' }}" name="qualification" placeholder="Highest Qulification" value="{{ old('qualification') }}" required autofocus>

                    @if ($errors->has('qualification'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('qualification') }}</strong>
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
                    <input id="total_experience" type="text" class="form-control{{ $errors->has('total_experience') ? ' is-invalid' : '' }}" name="total_experience" placeholder="Total Experience (in years)" value="{{ old('total_experience') }}" required autofocus>

                    @if ($errors->has('total_experience'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('total_experience') }}</strong>
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

            <div class="form-group{{ $errors->has('profile_picture') ? ' has-error' : '' }}">
        <!-- <label for="resume" class="col-md-4 control-label">Upload Resume</label> -->
        <input id="resume" type="file" class="form-control" name="resume" required accept="application/pdf">

        @if ($errors->has('resume'))
            <span class="help-block">
                <strong>{{ $errors->first('resume') }}</strong>
            </span>
        @endif
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
