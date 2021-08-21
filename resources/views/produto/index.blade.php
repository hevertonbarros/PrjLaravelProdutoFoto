<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Lista de Produtos</h1>
        
        @if($msg = session('msg'))
        <p style="color:{{$msg[1]}}" >{{$msg[0]}}</p>
        @endif
        
        @foreach($produtos as $produto)
        <p> {{$produto->id}} - 
            {{$produto->nome}} - 
            <img width="100" src="{{ asset('storage/'.$produto->foto) }}">
            <form action="{{route('produto.destroy', $produto)}}" method="post">
                @method('DELETE')
                @csrf
                <input type="submit" value="Apagar">
            </form>
        </p>
        @endforeach
        
    </body>
</html>
