<?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $validacao = Validacoes::validate([

        'title' => ['require'],
        'notepad' => ['require'],
        'date' => ['require'],
        'name' => ['require']
        ], $_POST);

        if($validation->validateFailed('todo')){

        }
    }




view('to-do');