@extends('layouts.modal')

@section('modal')
<modal>
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <form class="p-2" method="POST" action="{{ route('register') }}">
        @csrf
        <input type="text" class="form-control my-2" placeholder="Nome" name="nome">
        <input type="text" class="form-control my-2" placeholder="CPF" name="cpf">
        <input type="text" class="form-control my-2" placeholder="Celular" name="celular">
        <input type="email" class="form-control my-2" placeholder="E-mail" name="email">
        <input type="password" class="form-control my-2" placeholder="Senha" name="password" required autocomplete="new-password">
        <button type="submit" class="btn btn-primary btn-block bg-main" value="Inscreva-se">Inscreva-se</button>
    </form>
</modal>
@endsection