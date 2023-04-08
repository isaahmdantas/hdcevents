<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function index() {
        $nome = 'Isadora';
        $idade = 29;
        $arr = [1,2,3,4,5];
        $nomes = ['João', 'Maria', 'Paulo', 'Pedro', 'Matheus'];
    
        return view('welcome', 
            [
                'nome' => $nome, 
                'idade' => $idade, 
                'profissao' => 'Programadora',
                'arr' => $arr,
                'nomes' => $nomes 
            ]
        );
    }

    public function create() {
        return view('events.create');
    }
}
