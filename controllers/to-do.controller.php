<?php


if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $notes = $database->query(
        query: "select * from anotacoes ",
        class: Notes::class,
    )->fetchAll();



    view('to-do',compact('notes'));
}
