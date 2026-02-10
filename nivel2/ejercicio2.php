<?php
$classNotes = [
    "Clara" => [10, 8, 9, 7, 9],
    "Miguel" => [8, 9, 6, 7, 9],
    "Dani" => [7, 8 ,9, 6, 7],
    "Manel" => [6, 9, 10, 8, 9],
    "Martina" => [9, 8, 7, 8, 9],
    "Lauren" => [9, 7, 9, 9, 8],
    "Orlando" => [9, 7, 8, 6, 9],
    "Franco" => [7, 8, 6, 9, 8],
    "Riu" => [9, 9, 9, 10, 8],
    "Alvaro" => [10, 8, 9, 7, 8],
];

function calculateAverages($classNotes) {
    $averageClass = 0;
    $numStudents = count($classNotes);

    echo "Average of each student: " . PHP_EOL;

    foreach ($classNotes as $student => $notes) {
        $averageStudent = array_sum($notes) / count($notes); // media por student
        echo "- $student: " .round($averageStudent, 2) . PHP_EOL;

        $averageClass += $averageStudent; // acumula la media total

    }

    $finalClassAverage = $averageClass / $numStudents;

    echo PHP_EOL . "Class Average: " . round($finalClassAverage, 2) . PHP_EOL;
    
}

calculateAverages($classNotes);


?>