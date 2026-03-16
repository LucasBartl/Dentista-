<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_GET['id'];
    $validation = Validation::validate([

        'client' => ['require'],
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
        query: "insert into agendamentos (date, time, procedures, client, dentist, obs, user_id) VALUES (:date, :time, :procedures, :client, :dentist, :obs, :user_id) ",
        class: Procedures::class,
        params: [
            'date' => $_POST['date'],
            'time' => $_POST['time'],
            'procedures' => $_POST['procedures'],
            'client' => $_POST['client'],
            'dentist' => $_POST['dentist'],
            'obs' => $_POST['obs'],
            'user_id' => $user_id
        ]
    )->fetchAll();

    header('Location: /appointments');
    exit();
}



view('appointments');
