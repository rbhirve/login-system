@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color: #E5E5E5">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form id="form-submit" action="#">
                        @csrf
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required>

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                            <div class="col-md-6">
                                <input type="radio" name="gender" value="male" checked> Male<br>
                                <input type="radio" name="gender" value="female"> Female<br>

                                @if ($errors->has('gender'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('Contact') }}</label>
    
                                <div class="col-md-6">
                                    <input id="contact" type="number" class="form-control{{ $errors->has('contact') ? ' is-invalid' : '' }}" name="contact" value="{{ old('contact') }}" required>
    
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <p id="form-name" style="color:red"></p>
                                <p id="form-email" style="color:red"></p>
                                <p id="form-address" style="color:red"></p>
                                <p id="form-contact" style="color:red"></p>
                                <p id="form-password" style="color:red"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

        $(document).ready(function() {
            
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            

            function validate() {
                if($('input[name=name]').val() == "") {
                    $('input[name=name]').addClass('is-invalid');
                    $('#form-name').html('Please enter the name');
                } else{
                    $('input[name=name]').removeClass('is-invalid');
                    $('#form-name').html('');
                }
                if($('input[name=email]').val() == "") {
                    $('input[name=email]').addClass('is-invalid');
                    $('#form-email').html('Please enter the valid email');
                } else{
                    $('input[name=email]').removeClass('is-invalid');
                    $('#form-email').html('');
                }
                if($('input[name=address]').val() == "") {
                    $('input[name=address]').addClass('is-invalid');
                    $('#form-address').html('Please enter the address');
                } else{
                    $('input[name=address]').removeClass('is-invalid');
                    $('#form-address').html('');
                }
                if($('input[name=contact]').val() == "") {
                    $('input[name=contact]').addClass('is-invalid');
                    $('#form-contact').html('Please enter the contact number');
                } else {
                    $('input[name=contact]').removeClass('is-invalid');
                    $('#form-contact').html('');
                }
                if($('input[name=password]').val() == "") {
                    $('input[name=password]').addClass('is-invalid');
                    $('#form-password').html('Please enter the password');
                    $('input[name=password_confirmation]').addClass('is-invalid');
                } else{
                    $('input[name=password]').removeClass('is-invalid');
                    $('input[name=password_confirmation]').removeClass('is-invalid');
                    $('#form-password').html('');
                }

                if($('input[name=password]').val() != $('input[name=password_confirmation]').val()) {
                    $('input[name=password]').addClass('is-invalid');
                    $('input[name=password_confirmation]').addClass('is-invalid');
                    $('#form-password').html('Please conform the correct password');
                } else{
                    $('input[name=name]').removeClass('is-invalid');
                    $('#form-name').html('');
                }
                return true;
            }

            window.addEventListener("click", function () {
                validate();
            }, false);


            $('#form-submit').on('submit', function(event){
                event.preventDefault();

                var formData = {
                    _token   : "{{ csrf_token() }}",
                    name     : $('input[name=name]').val(),
                    email    : $('input[name=email]').val(),
                    address  : $('input[name=address]').val(),
                    gender   : $('input[name=gender]').val(),
                    contact  : $('input[name=contact]').val(),
                    password : $('input[name=password]').val()
                }

                $.ajax({
                    type     : "POST",
                    url      : "/register",
                    data     : formData,
                    cache    : false,

                    success  : function(responce) {
                        console.log(responce);
                        alert('success');
                    },
                    error    : function(responce) {
                        alert('Validation Failed');
                    }
                })
                return false;
            });
        });
</script>

@endsection
