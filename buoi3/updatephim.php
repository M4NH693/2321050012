<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            border: 1px solid black;
            padding: 20px;
            border-radius: 10px;
            width: 350px;
        }

        .container {
            display: flex;
            justify-content: center;
            padding: 20px;
        }

        input,
        select,
        textarea {
            margin-bottom: 10px;
            padding: 8px;
        }

        button {
            padding: 10px;
            cursor: pointer;
        }
    </style>
</head>

<body>

<?php
include("connect.php");

$id = $_GET["id"];
$sql = "SELECT * FROM list_film WHERE id_phim = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<div class="container">
<form action="" method="POST">

    <input type="hidden" name="id_cu" value="<?php echo $row['id_phim']; ?>">

    <label>id phim</label>
    <input type="text" name="idPhim" value="<?php echo $row['id_phim']; ?>">

    <label>tên phim</label>
    <input type="text" name="tenPhim" value="<?php echo $row['ten_phim']; ?>">

    <!-- ĐẠO DIỄN -->
    <select id="dao-dien" name="dao-dien">
        <?php
        $sql = "SELECT nd.*, q.ten_quyen 
                FROM nguoi_dung nd 
                JOIN quyen q ON nd.id_quyen = q.id_quyen 
                WHERE q.id_quyen = 4";
        $result = mysqli_query($conn, $sql);

        while ($daoDien = mysqli_fetch_assoc($result)) {
        ?>
            <option value="<?php echo $daoDien['id_nguoi_dung']; ?>"
                <?php echo ($row['id_dao_dien'] == $daoDien['id_nguoi_dung']) ? 'selected' : ''; ?>>
                <?php echo $daoDien['ho_ten']; ?>
            </option>
        <?php } ?>
    </select>

    <label>thời lượng</label>
    <input type="text" name="thoiLuong" value="<?php echo $row['thoi_luong']; ?>">

    <label>năm phát hành</label>
    <input type="text" name="namPhatHanh" value="<?php echo $row['nam_phat_hanh']; ?>">

    <!-- QUỐC GIA -->
    <select id="quoc-gia" name="quoc-gia">
        <?php
        $sql = "SELECT * FROM quoc_gia";
        $result = mysqli_query($conn, $sql);

        while ($quocGia = mysqli_fetch_assoc($result)) {
        ?>
            <option value="<?php echo $quocGia['id_quoc_gia']; ?>"
                <?php echo ($row['id_quoc_gia'] == $quocGia['id_quoc_gia']) ? 'selected' : ''; ?>>
                <?php echo $quocGia['ten_quoc_gia']; ?>
            </option>
        <?php } ?>
    </select>

    <label>trailer</label>
    <input type="text" name="trailer" value="<?php echo $row['trailer']; ?>">

    <label>poster</label>
    <input type="text" name="poster" value="<?php echo $row['poster']; ?>">

    <label>mô tả</label>
    <textarea name="moTa"><?php echo $row['mo_ta']; ?></textarea>

    <button type="submit">cập nhật phim</button>
</form>

<?php

if (
    !empty($_POST["idPhim"]) &&
    !empty($_POST["poster"]) &&
    !empty($_POST["dao-dien"]) &&
    !empty($_POST["tenPhim"]) &&
    !empty($_POST["thoiLuong"]) &&
    !empty($_POST["quoc-gia"]) &&
    !empty($_POST["namPhatHanh"]) &&
    !empty($_POST["trailer"]) &&
    !empty($_POST["moTa"])
) {

    $idCu = $_POST["id_cu"];

    $idPhim = $_POST["idPhim"];
    $daoDien = $_POST["dao-dien"];
    $tenPhim = $_POST["tenPhim"];
    $thoiLuong = $_POST["thoiLuong"];
    $quocGia = $_POST["quoc-gia"];
    $namPhatHanh = $_POST["namPhatHanh"];
    $poster = $_POST["poster"];
    $trailer = $_POST["trailer"];
    $mota = $_POST["moTa"];

    $sql = "UPDATE list_film SET 
            id_phim = '$idPhim',
            ten_phim = '$tenPhim',
            id_dao_dien = '$daoDien',
            thoi_luong = '$thoiLuong',
            nam_phat_hanh = '$namPhatHanh',
            id_quoc_gia = '$quocGia',
            poster = '$poster',
            trailer = '$trailer',
            mo_ta = '$mota'
            WHERE id_phim = '$idCu'";

    if (mysqli_query($conn, $sql)) {
        header("Location: admin.php?page_layout=phim");
        exit();
    } else {
        echo "lỗi: " . mysqli_error($conn);
    }
} else {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        echo "vui lòng nhập đủ thông tin";
    }
}
?>

</div>

</body>
</html>
