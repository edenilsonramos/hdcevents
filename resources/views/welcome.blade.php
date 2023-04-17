@extends('layouts.main')
@section('title', "HDC Events")

@section('content')
    <h1> Algum titúlo</h1>
    @if($nome == "Edenilson")
        <p> O nome é Edenilson</p>
    @else
        <p> O nome não é Edenilson</p>
    @endif
@endsection