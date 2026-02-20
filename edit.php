<?php
include 'config.php';

$result = $dynamodb->scan([
    'TableName' => 'users'
]);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User List</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            margin-top: 15px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .top-link {
            margin-bottom: 10px;
            display: inline-block;
        }
    </style>
</head>

<body>

<h2>User List</h2>
<a class="top-link" href="create.php">+ Add User</a>

<table>
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
    <td><?= $item['user_id']['S'] ?? '' ?></td>
    <td><?= $item['name']['S'] ?? '' ?></td>
    <td><?= $item['email']['S'] ?? '' ?></td>
    <td><?= $item['message']['S'] ?? '' ?></td>
    <td><?= $item['created_at']['S'] ?? '' ?></td>
    <td>
        <a href="edit.php?id=<?= $item['user_id']['S'] ?>">Edit</a> |
        <a href="delete.php?id=<?= $item['user_id']['S'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
    </td>
</tr>
<?php endforeach; ?>

</table>

</body>
</html>
