<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $validation = Validation::validate([

        'name' => ['require'],
        'birth' => ['require'],
        'email' => ['require', 'min', 'email', 'unique'],
        'tel' => ['require','unique'],
        'cpf' => ['require', 'unique'  ]
    ], $_POST);
    
    if ($validation->validateFailed('todo')) {
        $_SESSION['validations'] = $validation->validations;
        header('location: /home');
        exit();
    }


    $register = $database->query(
        query: 'insert into clientes (name, birth, email, tel, cpf) 
        VALUES (:name, :birth, :email, :tel, :cpf )',
        class: Client::class,
        params: [
            'name' => $_POST['name'],
            'birth' => $_POST['birth'],
            'email' => $_POST['email'],
            'tel' => $_POST['tel'],
            'cpf' => $_POST['cpf']
        ]
    )->fetchAll();
    header('location: /register-clients');
    exit();
}

view('register-clients');
