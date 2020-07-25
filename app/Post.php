<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Post é procurado a tabela posts no DB
// o laravel tenta encontrar no plural
class Post extends Model
{
    // tbl_posts - definimos o nome da tabela
    // protected $table = 'tbl_posts';

    // informamos a coluna chame primário pro Laravel
    // protected $primaryKey = 'cod_posts';
}