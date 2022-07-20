<?php
require "sqll.php";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT content FROM sitequotes WHERE quote='changelog'";
$result = $conn->query($sql);

//changelog
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $changelog = $row["content"];
    }
}

$sql = "SELECT content FROM sitequotes WHERE quote='mekkemsg'";
$result = $conn->query($sql);

//mekkemsg
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $mekkemsg = $row["content"];
    }
}


$conn->close();
?>