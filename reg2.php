<?php

require_once("dbcon.php");
$rawdata=file_get_contents("php://input");
$newdata=json_decode($rawdata,true);


$fullname=$newdata["fullname"]?? null;
$username=$newdata["username"]?? null;
$email=$newdata["email"]?? null;
$password=$newdata["password"]?? null;


$query=mysqli_query ($conn,"INSERT INTO lmsreg (fullname, username, email, password)
 VALUE ('$fullname','$username','$email', '$password')");
 
 
$response = [];
if($query){
        $response=["success"=> true,
    "status"=>200
];

}else{
    $response=["success"=>false,
      "status"=>500
      
];
}

echo json_encode($response);



?>