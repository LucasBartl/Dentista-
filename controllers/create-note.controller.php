<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $validation = Validation::validate([

        'title' => ['require'],
        'notepad' => ['require'],
        'date' => ['require'],
        'name' => ['require']
    ], $_POST);

    if ($validation->validateFailed('todo')){  
        $_SESSION['validations'] = $validation->validations;
        header('location: /home');
        exit();    
    }

    $result = $database->query(
        query:"insert into anotacoes ( title, notepad, date, name)
                VALUES (:title, :notepad, :date, :name);",
        params:[
            'title' => $_POST['title'],
            'notepad' => $_POST['notepad'],
            'date' => $_POST['date'],
            'name' => $_POST['name'],
            
        ]
    )->fetchAll();
    


    header('location: /to-do');
    exit();
}
