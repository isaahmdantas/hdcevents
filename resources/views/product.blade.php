@extends('layouts.main')

@section('title', 'HDC Events - Product')

@section('content')

@if($id != null)
    <p>Exibindo produto id: {{ $id }}</p>
@else 
    <p>Não está exibindo nenhum produto </p>
@endif


@endsection