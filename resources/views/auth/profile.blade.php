@extends('layouts.app')
@section('content')
    <form role="form" method="POST" action="{{ route('updateProfile') }}" enctype="multipart/form-data">
        @csrf
    <input type="hidden" name="id" value="{{$user->id}}">
    <input type="hidden" name="oldResume" value="{{$user->resume}}">
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
                               value="{{ $user->name }}"
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
                               value="{{ $user->email }}"
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
                    <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" placeholder="Mobile" value="{{ $user->phone }}" required autofocus>

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
                    <input id="qualification" type="text" class="form-control{{ $errors->has('qualification') ? ' is-invalid' : '' }}" name="qualification" placeholder="Highest Qulification" value="{{ $user->qualification }}" required autofocus>

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
                    <input id="total_experience" type="text" class="form-control{{ $errors->has('total_experience') ? ' is-invalid' : '' }}" name="total_experience" placeholder="Total Experience (in years)" value="{{ $user->total_experience }}" required autofocus>

                    @if ($errors->has('total_experience'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('total_experience') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
        </div>
    
            <div class="col-xl-12">

            <div class="form-group{{ $errors->has('profile_picture') ? ' has-error' : '' }}">
        <!-- <label for="resume" class="col-md-4 control-label">Upload Resume</label> -->
            <input id="resume" type="file" class="form-control" name="resume" value = "{{$user->resume}}" accept="application/pdf" onchange="fileChange()">

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
                            {{ __('Update') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
