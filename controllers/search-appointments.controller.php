<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $query = $database->query(
        query: "select c.id, c.name, ag.user_id from 
                    clientes as c
                        inner join 
                            agendamentos as ag on
                                c.id = ag.user_id "
    )->fetchAll();

    foreach ($query as $client) {

        $user_id = $client['id'];

        $searchScheduled = $database->query(
            query: "select id, user_id, date, time, procedures, dentist, obs  from agendamentos",
        )->fetchAll(PDO::FETCH_ASSOC);

        $event = [];

        foreach ($searchScheduled as $schedules) {
            $event[] = [
                'id' => $schedules['id'],
                'title' => " " . $schedules['procedures'] . "   -   " . $client['name'],
                'start' => $schedules['date'] . "T" . $schedules['time']
            ];
        }
    }
    header('Content-type: application/json');
    echo json_encode($event);
}
