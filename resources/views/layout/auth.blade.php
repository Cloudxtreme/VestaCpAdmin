@extends('layout.base')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4 text-center">
                <h1>@yield('title')</h1>
                @if (Session::has('authError'))
                    <div class="alert alert-warning">{{ Session::get('authError') }}</div>
                @endif
                <form action="@yield('form-action')" method="post">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <input name="email" type="email" value="{{ old('email') }}" class="form-control input-lg" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input name="password" type="password" class="form-control input-lg" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Login" class="form-control btn btn-primary input-lg">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
