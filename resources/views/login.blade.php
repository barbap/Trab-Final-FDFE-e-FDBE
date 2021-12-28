@extends('layouts.modal')

@section('modal')
<modal>
    <p class="mb-4" :status="session('status')" />
    <p class="mb-4" :errors="$errors" />
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <input type="email" class="form-control my-2" placeholder="E-mail" name="email">
        <input type="password" class="form-control my-2" placeholder="Senha" name="senha">
        <button type="submit" class="btn btn-primary btn-block bg-main" value="Login">Login</button>
        <a class="btn btn-light btn-block" href="{{ url('/register') }}">Inscreva-se</a>
    </form>
</modal>
@endsection