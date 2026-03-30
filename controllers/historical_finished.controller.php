<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_GET['id'];
    $valid = Validation::validate([
        'obs_end' =>  ['require'],
        'status' =>  ['require']
    ], $_POST);
    $alter = $database->query(
        query: "UPDATE agendamentos
                    SET status = :status,
                        obs_end = :obs_end
                            WHERE id = :id",
        class: Appointments::class,
        params: [
            'id' =>$id,
            'status' => $_POST['status'],
            'obs_end' => $_POST['obs_end']
        ],
    );
    header("location: /data-client?id={$id}");
    exit();
}

$id = $_GET['id'];
$client =  $database->query(
    query: "SELECT c.id ,c.name, a.user_id, a.id FROM   
                clientes AS c 
                    JOIN agendamentos AS a  
                        ON a.user_id = c.id 
                            WHERE a.id = :id",
    params: ['id' => $id]
)->fetch();
$searchs = $database->query(
    query: "select * from agendamentos where :id = id",
    params: ['id' => $id]
)->fetch();

view('historical_finished', ['searchs' => $searchs, 'client' => $client]);

