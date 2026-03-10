<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $validation = Validation::validate([

        'client' => ['require'],
        'procedures' => ['require'],
        'dentist' => ['require'],
        'date' => ['require'],
        'time' => ['require'],
        'obs' => ['require']
    ], $_POST);
    if($validation->validateFailed('appointments')) {
        $_SESSION['validations'] = $validation->validations;
        header('location: /home');
        exit();
    }
    $scheduled = $database->query(
        query: "insert into agendamentos (date, time, procedures, client, dentist, obs) VALUES (:date, :time, :procedures, :client, :dentist, :obs) ",
        class: Procedures::class,
        params: [
            'date' => $_POST['date'],
            'time' => $_POST['time'],
            'procedures' => $_POST['procedures'],
            'client' => $_POST['client'],
            'dentist' => $_POST['dentist'],
            'obs' => $_POST['obs'],
        ]
        )->fetchAll();

    view('appointments', ['scheduled' => $scheduled] );
}

view('appointments');
