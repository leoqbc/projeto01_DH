@extends('template')

@section('main')       
<h2>Crie seu Post</h2>
<p>Crie seu post preenchendo os campos abaixo</p>

<form action="{{ route('post_insert') }}" method="POST">
    <div>
        <label for="titulo">Titulo</label>
        <input type="text" id="titulo" name="titulo">
    </div>
    <div>
        <label for="titulo">Conteudo</label>
        <textarea name="conteudo" id="conteudo" cols="60" rows="20"></textarea>
    </div>
    <button>Cadastrar Post</button>
    @csrf
</form>
@endsection

@section('titulo')
Criando Posts
@endsection

@section('script-css')
<style>
body {
    background-color: #EEE;
}

label {
    display: block;
    margin: 5px 0;
}
</style>
@endsection