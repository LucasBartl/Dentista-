<?php

$collaborator = $database->query(
    query: "select * from funcionario",
)->fetchAll(PDO::FETCH_ASSOC);
$admin = "administrativo";

view('collaborators', ['collaborator' => $collaborator , 'administrativo' =>$admin ]);
