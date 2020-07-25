@extends('template')

@section('main')
<h2>Veja os ultimos posts do dia</h2>

<section id="posts">
    @forelse($posts as $post)
        <article class="post">
            <h3>{{ $post->titulo }}</h3>
            <p>{{ $post->conteudo }}</p>
            <a href="{{ route('post_delete', [encrypt($post->id)]) }}">Excluir</a>
        </article>
    @empty
        <div class="no-posts">
            Nenhum post encontrado
        </div>
    @endforelse
    {{-- @foreach($posts as $post)
        <article class="post">
            <h3>{{ $post->titulo }}</h3>
            <p>{{ $post->conteudo }}</p>
        </article>
    @endforeach --}}
</section>
@endsection