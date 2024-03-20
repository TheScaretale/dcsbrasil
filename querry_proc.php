<?php
include "conn.php";

$predefinedQuerries = array(
    "SELECT * FROM user"
)

$userQuery = $_POST['user_query'];

$stmt = $conn->prepare($userQuery);

if ($stmt === false) {
    die('Error'.htmlspecialchars($conn->error));
}

$stmt->execute();

$stmt->close();
$conn->close();