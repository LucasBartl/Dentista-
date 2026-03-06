<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $id = $_GET['id'];
  
    $read = $database->query(
        query: "select * from anotacoes where id = :id ",
        params: ['id' => $id]
    )->fetch();


    view("note",['read'=> $read] );
}
