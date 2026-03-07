<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $id = $_GET['id'];
  
    $read = $database->query(
        query: "select * from anotacoes where id = :id ",
        params: ['id' => $id]
    )->fetch();

    

    view("note",['read'=> $read] );
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $id = $_GET['id'];

    $remove = $database->query(
        query: "delete from anotacoes where id = :id" ,
        params:[ 'id' => $id ]
    );

    header('location: /to-do');
    exit();

}
