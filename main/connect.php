<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password= $_POST['password'];
$QRCode= $_POST['QRCode'];


//DB
$conn = new mysqli('localhost', 'root', '', 'vForm');
if($conn->connect_error)
{
    die('Connection Failed...!' .$conn->connect_error);
} else{
    $stmt = $conn->prepare("insert into verification(firstname, lastName, email, password, QRCode) values(?,?,?,?,?");
    $stmt->bind_param("sssss", $firstName, $lastName, $email, $password, $QRCode);
     $stmt->execute();
    echo "Verification!";
    $stmt->close();
    $conn->close();
}

?>