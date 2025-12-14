<?php
$input = file_get_contents("php://input");
$data = json_decode($input,true);

$email = $data['email'];
$password = $data['password'];

require_once("includes/config.php");

$qry= mysqli_query($conn,"SELECT * FROM users WHERE email='$email' AND password='$password'");

if($userRow = mysqli_fetch_assoc($qry)){


    session_start();
$_SESSION["Id"] = $userRow["id"];
$_SESSION["firstName"] = $userRow["firstName"];
$_SESSION["lastName"] = $userRow["lastName"];
$_SESSION["email"] = $userRow["email"];
$_SESSION["password"] = $userRow["password"];
// $_SESSION["lastName"] = $userRow["lastName"];
$_SESSION["access_level"] = $userRow["access_level"];
$_SESSION["category"] = $userRow["category"];
$_SESSION["islogin"] = true;
    
    header("content-Type:application/json");
    $response = [
    "success"=>true,
    "message"=>"login sucessful",
    "user"=>$userRow["access_level"],
    "category"=>$userRow["category"]


    ];
}else{
 $response = [
    "success"=>false,
    "message"=>"invalid email or password"
    ];
}
echo json_encode($response);



?>




















