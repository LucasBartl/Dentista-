<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $id = $_GET['id'];


    $dataClient = $database->query(
        query: "select * from clientes where id = :id ",
        params: ['id' => $id],
    )->fetch();
   
    $appointments = $database->query(
        query: "SELECT * FROM agendamentos WHERE user_id = :id and status = 'aberto'",
        params: ['id' => $id]
    )->fetchAll();


    $appointments_end = $database->query(
        query: "SELECT * FROM agendamentos WHERE user_id = :id and status = 'Fechado' or status = 'fechado' ",
        params: ['id' => $id]
    )->fetchAll();


    view('data-client', ['dataClient'  => $dataClient, 'appointments' => $appointments , 'appointments_end' => $appointments_end ]);
}




view('data-client');
