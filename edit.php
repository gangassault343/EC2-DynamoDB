<?php
include 'config.php';

$id = $_GET['id'];

if ($_POST) {
    $dynamodb->updateItem([
        'TableName' => 'users',
        'Key' => [
            'user_id' => ['S' => $id]
        ],
        'UpdateExpression' => 'SET #n = :name, email = :email',
        'ExpressionAttributeNames' => [
            '#n' => 'name'
        ],
        'ExpressionAttributeValues' => [
            ':name'  => ['S' => $_POST['name']],
            ':email' => ['S' => $_POST['email']],
            ':message' => ['S' => $_POST['message']]
        ]
    ]);
    header("Location: index.php");
}

$result = $dynamodb->getItem([
    'TableName' => 'users',
    'Key' => ['user_id' => ['S' => $id]]
]);

$user = $result['Item'];
?>

<h2>Edit User</h2>
<form method="post">
    Name: <input type="text" name="name" value="<?= $user['name']['S'] ?>"><br>
    Email: <input type="email" name="email" value="<?= $user['email']['S'] ?>"><br>
    Message: <input type="text" name="message" value="<?= $user['message']['S'] ?>"><br>
    <button type="submit">Update</button>
</form>
