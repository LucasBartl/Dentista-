<?php
$collaborator = $database->query(
    query: "select * from funcionario",
)->fetchAll(PDO::FETCH_ASSOC);


foreach ($collaborators as $employees) {
    $sectors[] = $employees['setor'];
}
header('Content-type: application/json');
echo json_encode($sectors);
exit();
header('location: /collaborators');