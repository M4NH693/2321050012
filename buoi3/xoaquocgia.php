<?php
include("connect.php");
    $id=$_GET["id"];
    echo  $_GET["id"];
    $sql = "DELETE FROM `quoc_gia` WHERE id_quoc_gia =$id";
    mysqli_query($conn, $sql);
    header("Location: admin.php?page_layout=quocgia");
?>