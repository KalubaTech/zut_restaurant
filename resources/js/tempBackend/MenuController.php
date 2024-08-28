<?php
// tempBackend/MenuController.php

header('Content-Type: application/json');

$data = [
    ['id' => 1, 'name' => 'Pizza', 'calories' => 500],
    ['id' => 2, 'name' => 'Salad', 'calories' => 150],
    ['id' => 3, 'name' => 'Burger', 'calories' => 700]
];

echo json_encode($data);
?>
