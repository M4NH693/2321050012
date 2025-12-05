<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nguoidung</title>
    <style>
        
    </style>
</head>
<body>
    <h1>quản lý thông tin người dùng</h1>
    <div>
        <a class="btn_them" href="themmoinguoidung.php">thêm người dùng</a>
      
    </div>
    <table border="1">
        <tr>
            <td>Họ Tên</td>
            <td>Tên đăng nhập</td>
            <td>email</td>
            <td>số điện thoại</td>
            <td>quyền</td>
            <td>sinh nhật</td>
            <td>chức năng</td>
        </tr>
    <?php
        include("connect.php");
        $sql = "SELECT * FROM `nguoi_dung` nd JOIN quyen q on nd.id_quyen = q.id_quyen";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)){

        
    ?>
        <tr>
            <td><?php echo $row["ho_ten"]?></td>
            <td><?php echo $row["ten_dang_nhap"]?></td>
            <td><?php echo $row["email"]?></td>
            <td><?php echo $row["sdt"]?></td>
            <td><?php echo $row["ten_quyen"]?></td>
            <td><?php echo $row["sinh_nhat"]?></td>
            <td>
               
                <a href="capnhatnguoidung.php?id=<?php echo $row["id_nguoi_dung"] ?>">cập nhật</a>
               <a href="xoanguoidung.php?id=<?php echo $row["id_nguoi_dung"] ?>">Xóa</a>


            </td>
           
        </tr>
        <?php }?>
    </table>
</body>
</html>