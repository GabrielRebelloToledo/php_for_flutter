<?php
 $db = mysqli_connect('localhost', 'root', '', 'userdata');
 if(!$db){
    echo "Database connection failed";
}
if($db){
    echo "Database connection ok";
}
$username = $_POST['username'];
$senha = $_POST['password'];

$sql = "SELECT * FROM login WHERE username = '".$username."' AND senha = '".$senha."'";


$result = mysqli_query($db,$sql);
$count = mysqli_num_rows($result);

if($count == 1){
    
    echo json_encode("Success");
    
}else{
    echo json_encode("Error");
} 


?>