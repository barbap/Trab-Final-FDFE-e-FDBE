@extends('layouts.app')

@section('header')
<header-component image="{{ asset('images/logo.png') }}"></header-component>
@endsection
@section('course')
<course></course>
@endsection
@section('pictures')
<pictures image="{{ asset('images/superiores.jpg') }}"></pictures>
@endsection
@section('matricula')
<matricula></matricula>
@endsection
@section('formulario')
<formulario route="{{ route('register') }}"></formulario>
@endsection
@section('footer')
<footer-component></footer-component>
@endsection