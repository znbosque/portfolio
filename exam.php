<?php
    $data = file_get_contents("dataset.json");
    $data = json_decode($data);

    foreach ($data as $worker) {
        if ($worker->address->city == "Cebu City" && $worker->age >= 24 && $worker->age <= 45) {
            echo $worker->first_name . " " . $worker->last_name . "\n";
        }
    }
?>