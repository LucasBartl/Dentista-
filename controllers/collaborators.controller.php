<?php

$administrative = $database->query(
    query: "select * from funcionario where setor = 'administrativo'",
)->fetchAll(PDO::FETCH_ASSOC);

$dentists = $database->query(
    query: "select * from funcionario where setor = 'dentista'",
)->fetchAll(PDO::FETCH_ASSOC);

$outsourced = $database->query(
    query: "select * from funcionario where setor = 'terceirizado'",
)->fetchAll(PDO::FETCH_ASSOC);


view('collaborators', ['administrative' => $administrative, 'dentists' => $dentists, 'outsourced' => $outsourced ]);
