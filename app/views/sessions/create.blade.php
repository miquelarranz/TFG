@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center white-color title-margin">Login</h1>

            @include('layouts.partials.errors')

            {{ Form::open(['route' => 'login_path']) }}
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-4 col-xs-10 col-xs-offset-1">
                        <!-- Email Form Input -->
                        <div class = "form-group">
                            {{ Form::email('email', null, ['placeholder' => 'Username', 'class' => 'form-control', 'required' => 'required']) }}
                        </div>

                        <!-- Password Form Input -->
                        <div class = "form-group">
                            {{ Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control', 'required' => 'required'] ) }}
                        </div>

                        <hr class="hr-login">

                        <div class = "form-group">
                            {{ Form::submit('Sign In', ['class' => 'btn btn-default login-btn form-control']) }}
                        </div>
                    </div>
                </div>

            {{ Form::close() }}
        </div>
    </div>
@endsection


