<?php
include 'config.php';

$id = $_GET['id'];

$dynamodb->deleteItem([
    'TableName' => 'users',
    'Key' => [
        'user_id' => ['S' => $id]
    ]
]);

header("Location: index.php");
?>
