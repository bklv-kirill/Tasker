@extends('layouts.authreg')

@section('content')
    @section('title', "Login")

    <x-forms.form :action="route('users.auth')" method="POST">
        <x-forms.input name="login" type="text" :value="old('login')" for="login">
            <x-slot name="label">
                Login
            </x-slot>
            @if ($errors->has("login"))
                <x-forms.error target="login"/>
            @endif
        </x-forms.input>

        <x-forms.input name="password" type="password" :value="old('password')" for="password">
            <x-slot name="label">
                Password
            </x-slot>
            @if ($errors->has("password"))
                <x-forms.error target="password"/>
            @endif
        </x-forms.input>


        <button type="submit" class="btn btn-primary">Login</button>
        <a href="{{ route("users.register") }}" class="ms-1">Register</a>

        @if ($errors->has("auth"))
            <x-forms.error target="auth"/>
        @endif
    </x-forms.form>
@endsection