@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')
    <h1>Algum título</h1>
    @if(10 > 5)
        <p>A condição é true</p>
    @endif
    <p>{{ $nome }}</p>

    @if($nome == 'Matheus')
        <p>O nome é Matheus</p>
    @elseif($nome == 'Isadora')
        <p>O nome é {{$nome}} e ela tem {{$idade}} anos e trabalha como {{ $profissao }}.</p>
    @else 
        <p>O nome não é Matheus</p>
    @endif

    @for($i =0; $i < count($arr); $i++)
        <p>{{$arr[$i]}} - {{$i}}</p>
    @endfor
    <!-- Este é um comentário do HTML -->
    {{-- Este é um comentário do blade --}}

    @foreach($nomes as $nome)
        <p>{{$nome}} - {{$loop->index}}</p>
    @endforeach
@endsection