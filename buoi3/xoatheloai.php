<?php
    include("connect.php");
    $id = $_GET["id"];
    echo  $_GET["id"];
    $sql ="DELETE FROM the_loai WHERE id_the_loai=$id";
    mysqli_query($conn, $sql);
    header("Location: admin.php?page_layout=theloai");
?>