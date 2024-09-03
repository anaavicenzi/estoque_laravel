@extends('layout.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
                        You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

    <a href= "{{ route('produtos.home') }}">Home</a>

    <h2>Login</h2>

@if (session()->has('success'))
    {{ session()->get('success')}}
@endif

@if (auth()->check())
    Already logged in | {{ auth()->user()->firstName }} | <a href="{{ route('login.destroy') }}">Logout</a>

@else
@error('error')
    <span>{{ $message }}</span>
@enderror

<form action='{{ route('login.store') }}' method='post'>
@csrf
    <input type="text" name="email">
    @error('email')
        <span>{{ $message }} </span>
    @enderror
    <input type="password" name="senha">
    @error('password')
        <span>{{ $message }} </span>
    @enderror
    <button type="submit"> Login </button>

</form>
@endif
@endsection
