<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dcsbrasil";

$conn = new mysqli($servername,$username,$password,$database);

if($conn->connect_error){
    die("Connection Failed: ".$conn->connect_error);
}
echo "Connected!"."<br>";

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows>0) {
    while($row=$result->fetch_assoc()){
        echo"ID: ".$row["id"]. " - Name: ".$row["username"]."<br>";
    }
}
else{
    echo "0 Resultados!";
}