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
                    <input id="first_name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="first_name" placeholder="First Name" value="{{ old('first_name') }}" required autofocus>

                    @if ($errors->has('first_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('first_name') }}</strong>
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
                    <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}" required autofocus>

                    @if ($errors->has('last_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('last_name') }}</strong>
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
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required>
                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
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
                    <input id="phone" type="number" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" placeholder="Phone" value="{{ old('phone') }}" required autofocus>

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
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
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
                    <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
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
                    <input id="qualification" type="text" class="form-control{{ $errors->has('qualification') ? ' is-invalid' : '' }}" name="qualification" placeholder="Qualification" value="{{ old('qualification') }}" required autofocus>

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
                    <input id="qualification" type="text" class="form-control{{ $errors->has('qualification') ? ' is-invalid' : '' }}" name="qualification" placeholder="Qualification" value="{{ old('qualification') }}" required autofocus>

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
                    <select name="skills[]" id="skills" class="form-control select2" multiple="multiple" required>
                        @foreach($skills as $id => $skill)
                            <option value="{{ $skill }}">{{ $skill }}</option>
                        @endforeach
                    </select>

                    @if ($errors->has('skills'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('skills') }}</strong>
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
                    <input id="total_exp" type="text" class="form-control{{ $errors->has('total_exp') ? ' is-invalid' : '' }}" name="total_exp" placeholder="Total Experience" value="{{ old('total_exp') }}" required autofocus>

                    @if ($errors->has('total_exp'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('total_exp') }}</strong>
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
                    <input id="rel_exp" type="text" class="form-control{{ $errors->has('rel_exp') ? ' is-invalid' : '' }}" name="rel_exp" placeholder="Relevant Experience" value="{{ old('rel_exp') }}" required autofocus>

                    @if ($errors->has('rel_exp'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('rel_exp') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
        </div>
        <!-- <div class="col-xl-12">
            <div id="date_picker"></div>
        </div> -->
        <div class="col-xl-12">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-user"></i>
                        </span>
                    </div>
                    <input id="qualification" type="text" class="form-control{{ $errors->has('qualification') ? ' is-invalid' : '' }}" name="qualification" placeholder="Qualification" value="{{ old('qualification') }}" required autofocus>

                    @if ($errors->has('qualification'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('qualification') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-simple-datetimepicker@1.12.0/jquery.simple-dtpicker.js"></script>

<script type="text/javascript">
$(function(){
  $('#date_picker').dtpicker();
});
</script>
@endsection