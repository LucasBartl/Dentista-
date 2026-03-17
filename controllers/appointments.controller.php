<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $validation = Validation::validate([

        'procedures' => ['require'],
        'dentist' => ['require'],
        'date' => ['require'],
        'time' => ['require'],
        'obs' => ['require']
    ], $_POST);
    if ($validation->validateFailed('appointments')) {
        $_SESSION['validations'] = $validation->validations;
        header('location: /appointments');
        exit();
    }



    $scheduled = $database->query(
        query: "insert into agendamentos (date, time, procedures, dentist, obs, user_id) VALUES (:date, :time, :procedures,:dentist, :obs, :user_id) ",
        class: Procedures::class,
        params: [
            'date' => $_POST['date'],
            'time' => $_POST['time'],
            'procedures' => $_POST['procedures'],
            'user_id' => $_POST['user_id'],
            'dentist' => $_POST['dentist'],
            'obs' => $_POST['obs'],
            
        ]
    )->fetchAll();

    header('Location: /appointments');
    exit();
}
$selectClient = $database->query(
    query: "select id, name from clientes",
)->fetchAll();


view('appointments',["selectClient" => $selectClient] );
