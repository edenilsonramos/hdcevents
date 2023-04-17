@extends('layouts.main')
@section('title', "Produtos")
@section('content')


@if($busca != '')
    <h1> Tela de produtos </h1>
    <p>O usuário está buscando por: {{ $busca }} </p>
    @endif
    <a href="/"> Voltar para home </a>    
@endsection