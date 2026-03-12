<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $searchScheduled = $database->query(
        query: "select id, client, date, time, procedures, dentist, obs  from agendamentos ",
    )->fetchAll();

    $event = [];

    foreach ($searchScheduled as $schedules) {
        $event[] = [
            'id'=>$schedules['id'],
            'title' =>$schedules['procedures'] . "   -   " . $schedules['client'],
            'start' => $schedules['date'] . "T" . $schedules['time']
        ];
    }
    header('Content-type: application/json');
    echo json_encode($event);
}
