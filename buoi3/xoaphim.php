<?php   
    include("connect.php");
    $id = $_GET["id"];
    echo  $_GET["id"];
    $sql = "DELETE FROM `list_film` WHERE id_phim = $id";
    mysqli_query($conn, $sql);
    header("Location: admin.php?page_layout=phim");
?>