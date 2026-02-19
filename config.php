<?php
require 'vendor/autoload.php';

use Aws\DynamoDb\DynamoDbClient;

$dynamodb = new DynamoDbClient([
    'region'  => 'ap-south-1',
    'version' => 'latest'
]);
?>
