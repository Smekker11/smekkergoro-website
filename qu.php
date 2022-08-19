<?php
error_reporting(E_ERROR | E_PARSE);
require "sqll.php";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$guestusrm = $_POST["guestusr"];
$sql = "UPDATE sitequotes SET content='$guestusrm' WHERE quote='guestusr'";
if ($guestusrm != NULL){
    if ($conn->query($sql) === TRUE){
        header("Location: /");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
  

//changelog
$sql = "SELECT content FROM sitequotes WHERE quote='changelog'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $changelog = $row["content"];
    }
}

//title
$sql = "SELECT content FROM sitequotes WHERE quote='title'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $title = $row["content"];
    }
}

//mekkemsg
$sql = "SELECT content FROM sitequotes WHERE quote='mekkemsg'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $mekkemsg = $row["content"];
    }
}

//guestusr
$sql = "SELECT content FROM sitequotes WHERE quote='guestusr'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $guestusr = $row["content"];
    }
}


$conn->close();
?>