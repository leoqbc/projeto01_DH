<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Declarando namespace do Model Post
use App\Post;

class PostController extends Controller
{
    public function create()
    {
        return view('post.create');
    }

    // $request é um objeto para pegar os dados via POST
    // $_POST vem $request pelo Laravel  (já tratado, em segurança)
    public function insert(Request $request)
    {
        // var_dump($_POST); // não usar!
        //usando o Laravel $request->get('conteudo')
        $post = new Post();

        // $request->get('nome_do_campo_no_form')
        $post->titulo = $request->get('titulo');
        $post->conteudo = $request->get('conteudo');
        $post->status = 'ativo';

        // esse método executa a query insert no DB
        if ($post->save()) {
            return 'Post criado com sucesso';
        }
             
        return 'Erro ao criar o post';
    }

    public function read()
    {
        // carregar os posts
        // pegar o primeiro Post::find(1) post de id=1
        // pegar todos os post use Post::all()
        $posts = Post::all();

        // Laravel: Collections
        // $posts = [objetos Post] / $posts[0]->titulo / foreach($posts as $post)

        // arquivo view post/read.blade.php ". = /"
        return view('post.read', compact('posts')); // $posts foi passada pra a view post/read.blade.php
    }

    public function delete($post_id)
    {
        // dump and die
        // dd(decrypt($post_id))

        // decriptografou o id do post
        $post_id = decrypt($post_id);

        // capturamos o registro via model
        $post = Post::find($post_id);

        // se não existir retorna msg
        if ($post === null) {
            return 'Post não encontrado';
        }

        // Faz o DELETE FROM
        if ($post->delete()) {
            return redirect()->route('post_read');
        }

        // Cai aqui se der erro
        return 'Algum erro ocorreu ao excluir';
    }
}
