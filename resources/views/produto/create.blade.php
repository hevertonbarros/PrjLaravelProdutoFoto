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
        <h1>Novo Produto</h1>
        
        @if($msg = session('msg'))
        <p style="color:{{$msg[1]}}" >{{$msg[0]}}</p>
        @endif
        
        <form action="{{route('produto.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            Nome: <input type="text" name="nome"><br>
            Foto: <input type="file" name="foto"><br>
            Preco: <input type="number" step="0.01" name="preco"><br>
            <input type="submit" name="Cadastrar">            
        </form>
        
    </body>
</html>
