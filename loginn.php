<?php


$input=file_get_contents("php://input");
$data=json_decode($input,true);

$email=$data['email'];
$password=$data['password'];

require_once("dbcon.php");

$qry= mysqli_query($conn,"SELECT * FROM lmsreg WHERE email='$email' AND password='$password'");

if($qry){
  $result = mysqli_fetch_array($qry);
 
    header("content-Type:application/json");
    echo json_encode([ 
    "sucess"=>true,
    "message"=>"login sucessful",
    "user"=>$result

    ]);
}else{
    echo json_encode([
    "sucess"=>false,
    "message"=>"invalid email or password"

    ]);
}



?>