<?php
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
if (!empty($name)){
if (!empty($email)){
$host = "localhost";
$dbusername = "infini64_lga_prelaunch";
$dbpassword = "TravelEverywhere$";
$dbname = "infini64_lga_prelaunch";
// Create connection
$conn = new mysqli ($host, $dbname, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO signup (name, email)
values ('$name','$email')";
if ($conn->query($sql)){
echo "Thank you! You will now recieve updates about Let's Go Amigo!";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "please add an email address";
die();
}
}
else{
echo "please input your name";
die();
}
?>
