<?php

    $dentists = $database->query(
        query:"select * from dentistas",
    )->fetchAll();


view('dentists', ['dentists' => $dentists]);