<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phim thể loại</title>
</head>

<body>
    <h1>phim thể loại</h1>

    <div style="display: flex; justify-content: space-between; align-items: center;">
        <h1>Thông tin phim thể loại</h1>
        <div>
            <a class="btn them" href="admin.php?page_layout=themphimtheloai">Thêm thể loại cho phim</a>
        </div>
    </div>

    <table border="1">
        <tr>
            <th>Tên phim</th>
            <th>Thể loại</th>
            <th>Chức năng</th>
        </tr>

        <?php
        include("connect.php");

        $sql = "SELECT tlp.id_the_loai_film, p.ten_phim, tl.ten_the_loai
                FROM the_loai_film tlp
                JOIN list_film p ON tlp.id_phim = p.id_phim
                JOIN the_loai tl ON tlp.id_the_loai = tl.id_the_loai";

        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?php echo $row["ten_phim"] ?></td>
                <td><?php echo $row["ten_the_loai"] ?></td>

                <td class="chuc-nang">
                    <a class="sua" 
                       href="admin.php?page_layout=capnhatphimtheloai&id=<?php echo $row["id_the_loai_phim"] ?>">
                       Cập nhật
                    </a>

                      <a class="xoa" href="xoatheloai.php?id=<?php echo $row["id"] ?>">Xóa</a>
                </td>
            </tr>
        <?php } ?>

    </table>

</body>

</html>
