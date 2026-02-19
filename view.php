<?php
include 'config.php';

$result = $dynamodb->scan([
    'TableName' => 'users'
]);
?>

<h2>User List</h2>
<a href="create.php">Add User</a>
<table border="1">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Message</th>
    <th>TimeStamp</th>
    <th>Action</th>
    
</tr>

<?php foreach ($result['Items'] as $item): ?>
<tr>
    <td><?= $item['user_id']['S'] ?></td>
    <td><?= $item['name']['S'] ?></td>
    <td><?= $item['email']['S'] ?></td>
    <td><?= $item['message']['S'] ?></td>
    <td><?= $item['timestamp']['S'] ?></td>
    <td>
        <a href="edit.php?id=<?= $item['user_id']['S'] ?>">Edit</a>
        <a href="delete.php?id=<?= $item['user_id']['S'] ?>">Delete</a>
    </td>
</tr>
<?php endforeach; ?>
</table>
