<?php

if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    $validation = Validation::validate(
        [
            'emailLogon' => ['require', 'email'],
            'passwordLogon' => ['require', 'maxError']
        ],
        $_POST
    );

    $permition = $database->query(

        query: "select * from funcionario where email = :emailLogon",
        class: Functionaries::class,
        params: [
            'emailLogon' => $_POST['emailLogon']
        ],
    )->fetch();

    if ($validation->validateFailed('login')) {
        $_SESSION['validations'] = $validation->validations;
        header('location: /login');
        exit();
    };

    if ($permition) {
        if (!password_verify($_POST['passwordLogon'], $permition->password)) {
            header("location: /login");
            exit();
        }
        $_SESSION['auth'] = $permition;
        header("location: /home");
        exit();
    }
}
view('login');
