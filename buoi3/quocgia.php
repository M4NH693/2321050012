<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Quốc gia</h1>
     <a href="themquocgia.php">thêm</a>
    <table border="1">
        <tr>
            <th>id quốc gia</th>
            <th>Quốc Gia</th>
        </tr>
        <?php
            include("connect.php");
            $sql = "SELECT * FROM quoc_gia ";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $row["id_quoc_gia"]?></td>
            <td><?php echo $row["ten_quoc_gia"]?></td>
            <td>
                <a href="">cập nhật</a>
                <a href="xoaquocgia.php?id=<?php echo $row["id_quoc_gia"]; ?>">xóa</a>
            </td>
        </tr>
        <?php }?>
    </table>
</body>
</html>