<?php
header("content-Type:application/json");
require_once("dbcon.php");
$method = $_SERVER['REQUEST_METHOD'];

if($method == 'GET'){
  $qry= mysqli_query($conn, "SELECT * FROM lmsreg");

$data= [];
while($row=mysqli_fetch_assoc($qry)){
    $record = ["id"=>$row['id'],"firstname"=>$row['firstname'], "username"=>$row['username'], "email"=>$row['email'] ];
    array_push($data,$record);
};

echo json_encode($data);
}

if($method == 'PUT'){
    $rawdata=file_get_contents("php://input");
    $newdata=json_decode($rawdata,true);
    $id=$newdata["id"]?? null;
    $firstname=$newdata["fullname"]?? null;
    $query=mysqli_query ($conn,"UPDATE lmreg set fullname='$fullname' WHERE id='$id'");
 
     

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


}





?>