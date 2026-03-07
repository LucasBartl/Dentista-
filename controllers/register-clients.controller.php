<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $validation = Validation::validate([

        'name' => ['require', 'min'],
        'birth' => ['require'],
        'email' => ['require', 'min', 'email', 'unique'],
        'tel' => ['require','unique']
    ], $_POST);

    if ($validation->validateFailed('todo')) {
        $_SESSION['validations'] = $validation->validations;
        header('location: /home');
        exit();
    }


    $register = $database->query(
        query: 'insert into clientes (name, birth, email, tel) 
        VALUES (:name, :birth, :email, :tel )',
        class: Client::class,
        params: [
            'name' => $_POST['name'],
            'birth' => $_POST['birth'],
            'email' => $_POST['email'],
            'tel' => $_POST['tel']
        ]
    )->fetchAll();
    header('location: /register-clients');
    exit();
}

view('register-clients');
