<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $query = "SELECT * FROM clientes WHERE 1=1";
    $params = [];

    if (!empty($_POST['search'])) {
        $query .= " AND (name LIKE :search OR email LIKE :search OR cpf LIKE :search)";
        $params['search'] = "%" . $_POST['search'] . "%";
    }

    $searchs = $database->query(
        query: $query,
        class: Client::class,
        params: $params
    )->fetchAll();

    view('search-clients', ['searchs' => $searchs]);
}
if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $searchs = [];
    view('search-clients', ['searchs' => $searchs]);
}
view('search-clients');
