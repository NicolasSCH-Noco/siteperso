@extends('app.app')

@section('title')
    Dashboard
@endsection

@section('content')
    <form action="{{ route('logout') }}" method="post">
        @csrf
    <button>Déconnexion</button></form>
@endsection