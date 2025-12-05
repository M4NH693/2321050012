<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phim</title>
</head>

<body>
    <h1>quản lý phim</h1>
     <a href="themphim.php">thêm</a>
    <table border="1">
        <tr>
            <td>id phim</td>
            <td>tên phim</td>
            <td> thể loại</td>
            <td>năm phát hành</td>
            <td>Tên Phim</td>
            <td>Thời Lượng</td>
            <td>Quốc Gia</td>
            <td>poster</td>
            <td>trailer</td>
            <td>mô tả </td>
        </tr>
        <?php
        //ket noi bang
        include("connect.php");
        $sql = "SELECT *,qg.ten_quoc_gia ,tl.ten_the_loai FROM list_film p
JOIN quoc_gia qg ON qg.id_quoc_gia = p.id_quoc_gia
JOIN the_loai tl ON tl.id_the_loai = p.id_the_loai";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $row["id_phim"] ?></td>
                <td><?php echo $row["ten_phim"] ?></td>
                <td><?php echo $row["ten_the_loai"] ?></td>
                <td><?php echo $row["nam_phat_hanh"] ?></td>
                <td><?php echo $row["ten_phim"] ?></td>
                <td><?php echo $row["thoi_luong"] ?></td>
                <td><?php echo $row["ten_quoc_gia"] ?></td>
                <td><?php echo $row["poster"] ?></td>
                <td><?php echo $row["trailer"] ?></td>
                <td><?php echo $row["mo_ta"] ?></td>


                <td>
                    <a href="updatephim.php?id=<?php echo $row["id_phim"]; ?>">cập nhật</a>
                    <a href="xoaphim.php?id=<?php echo $row["id_phim"]; ?>">xóa</a>
                </td>

            </tr>
        <?php } ?>


        <tr>

    </table>
</body>

</html>