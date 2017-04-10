@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row carousel-holder">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    @lang('profile.change_password')
                </div>
                <div class="panel-body">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                {{ $error }}<br>
                            @endforeach
                        </div>
                    @endif

                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    
                    <form action="{{ route('user.storePass') }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label>@lang('profile.email')</label>
                            <input type="email" class="form-control" name="email" readonly="" value="{{ $user->email }}" />
                        </div>
                        <div class="form-group">
                            <label>@lang('profile.password')</label>
                            <input type="password" class="form-control" name="pass" placeholder="@lang('profile.message.password')" />
                        </div>
                        <div class="form-group">
                            <label>@lang('profile.re_password')</label>
                            <input type="password" class="form-control" name="repass" placeholder="@lang('profile.message.re_password')" />
                        </div>
                        <button type="submit" class="btn btn-primary">
                            @lang('app.button.save')
                        </button>
                        <button type="reset" class="btn btn-default">
                            @lang('app.button.reset')
                        </button>
                    <form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>
@endsection
