<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $searchScheduled = $database->query(
        query: "
            SELECT 
                ag.id,
                ag.user_id,
                ag.date,
                ag.time,
                ag.procedures,
                c.name
            FROM agendamentos ag
            INNER JOIN clientes c 
                ON c.id = ag.user_id
        "
    )->fetchAll(PDO::FETCH_ASSOC);

    $event = [];

    foreach ($searchScheduled as $schedules) {
        $event[] = [
            'id' => $schedules['id'],
            'title' => $schedules['procedures'] . " - " . $schedules['name'],
            'start' => $schedules['date'] . "T" . $schedules['time']
        ];
    }

    header('Content-type: application/json');
    echo json_encode($event);
}
