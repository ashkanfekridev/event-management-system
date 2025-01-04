@extends('layouts.app')


@section('content')
    <div>
        <form action="{{route('auth.login')}}">
            @csrf
            <label for="email">
                <span class="text-base block">email</span>
                <input type="email" required id="email" class="form-input rounded @error('email') border-red-950 @enderror" name="email">
            </label>
            <label for="password">
                <span class="text-base block">password</span>
                <input type="password" required id="password" class="form-input rounded @error('password') border-red-950 @enderror" name="password">
            </label>
            <button type="submit" class="">ورود</button>
        </form>
    </div>
@endsection
