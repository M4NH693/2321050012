<?php
    include('connect.php');
    $id = $_GET["id"];
    echo $_GET["id"];
   $sql = "DELETE FROM nguoi_dung WHERE id_nguoi_dung = $id";
    mysqli_query($conn,$sql);
    header("Location:admin.php?page_layout=nguoidung");


    
?>