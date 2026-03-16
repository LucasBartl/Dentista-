<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $id = $_GET['id'];


    $dataClient = $database->query(
        query: "select * from clientes where id = :id ",
        params: ['id' => $id],
    )->fetch();
   
    $appointments = $database->query(
        query: "SELECT * FROM agendamentos WHERE user_id = :id",
        params: ['id' => $id]
    )->fetchAll();

    view('data-client', ['dataClient'  => $dataClient, 'appointments' => $appointments ]);
}




view('data-client');
