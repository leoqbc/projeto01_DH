<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    // rota "/"
    public function home()
    {
        // resources/views/site/home.blade.php
        // o "." substitui o "/" e vice versa
        return view('site.home');
    }

    // rota "/pagina"
    public function pagina()
    {
        return 'Aqui teria um HTML bonitão';
    }

    public function ola($nome_cliente, $sobrenome_cliente)
    {
        // chamada da nossa nova view('site.ola')
        // injetamos na view 2 valores: nome, sobrenome
        // usando um array associativo
        // return view('site.ola', [
        //     'nome_cliente' => $nome_cliente,
        //     'sobrenome_cliente' => $sobrenome_cliente
        // ]);

        $lista = [
            'links1',
            'links2',
            'links3'
        ];

        // forma1: view('sua.view', ['varivel' => 'valor])
        // forma2: view('sua.view', compact('variavel1', 'variavel2'));
        // forma3: view('sua.view')->with('variavel1', 'valor1')->with(...)->with(...)
        return view('site.ola', compact(
            'nome_cliente', 
            'sobrenome_cliente', 
            'lista'
        ));
    }

    public function contato()
    {
        return 'Contato aqui';
    }
}
