@extends('layouts.app')
@section('title')

iniciar sesion
    
@endsection
@section('content')

<form action="{{route('login')}}" method="post">
@csrf

@if(session('mendaje'))
<h6>{{session('mensaje')}}</h6>
@endif

email<input type="email" name="email" value="{{old('email')}}">
@error('email')
<h6>{{ $message }}</h6>
@enderror

contraseña<input type="password" name="password">
@error('password')
<h6>{{ $message }}</h6>
@enderror

<input type="submit" name="login" value="login">


</form>


    
@endsection