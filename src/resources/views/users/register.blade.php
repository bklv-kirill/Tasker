@extends('layouts.authreg')

@section('content')
    @section('title', "Register")

    <x-forms.form :action="route('users.store')" method="POST">
        <x-forms.input name="login" type="text" :value="old('login')" for="login">
            <x-slot name="label">
                Login
            </x-slot>
            @if ($errors->has("login"))
                <x-forms.error target="login"/>
            @endif
        </x-forms.input>

        <x-forms.input name="email" type="email" :value="old('email')" for="email">
            <x-slot name="label">
                Email
            </x-slot>
            @if ($errors->has("email"))
                <x-forms.error target="email"/>
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

        <button type="submit" class="btn btn-primary">Register</button>
        <a href="{{ route("users.login") }}" class="ms-1">Login</a>
    </x-forms.form>
@endsection