<?php
$servername = "localhost";
$username = "root";
$password = "";
$port = "3306";
$database = "quan_ly_film_webfpt";
// tao ket noi den dtb
$conn = new mysqli($servername,$username, $password,$database);

// kiem tra ket not 
if($conn->connect_error){
  die("loi ket noi: ".$conn->connect_error);
}else{
  echo "ket noi thanh cong!";
}
?>
