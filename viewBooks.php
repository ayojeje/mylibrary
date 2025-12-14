<?php
require_once("includes/config.php");
header("content-Type:application/json");
$method = $_SERVER['REQUEST_METHOD'];
$data= [];
// // GET ALL PATIENTS
// if($method == 'GET'){

// $viewBooksql = "SELECT * FROM library";
// $viewBookqry= mysqli_query($conn, $viewBooksql);

// $data= [];
// while($row=mysqli_fetch_assoc($viewBookqry)){
//     $record =[
//     "name"=>$row['name'],
//     "genre"=>$row['genre'],
//     "author"=>$row['author'],
//     "image"=> $row['uploads'],
    
// ];
// $data[] = $record;
// }
// echo json_encode($data);
// exit;

// }
// POST — REGISTER NEW PATIENT

if($method == 'POST'){
    // Collect text fields from FormData
$name =$_POST['name']??null;
$genre=$_POST['genre']??null;
$author=$_POST['author']??null;

$fileInput = $_FILES["image"];
 $ext = pathinfo($fileInput["name"], PATHINFO_EXTENSION);

 $newFileName = "myUploads/".time().".".$ext;
 $uploadsuccess = move_uploaded_file($fileInput["tmp_name"], $newFileName);
      
$qry= mysqli_query($conn, "INSERT INTO library(`name`,genre,author,uploads) 
VALUES ('$name','$genre','$author','$newFileName')") 
or die("Error in library: " . mysqli_error($conn));


    $data = [];
if($qry){
    $data=["success"=>true,
            "status"=>200
];
} else{
    $data=["success"=>false,
            "status"=>500
];
}
   
echo json_encode($data);
}
?>