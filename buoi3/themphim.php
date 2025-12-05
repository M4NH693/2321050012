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
        input, select {
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
   <div class="contaier">
         <form action="themphim.php" method="POST">
        <label for="">id phim</label>
        <input type="text" placeholder="id phim" name="idPhim">

        <label for="">tên phim</label>
        <input type="text" placeholder="tên phim" name="tenPhim">

        <label for="">thời lượng</label>
        <input type="text" placeholder="thời lượng" name="thoiLuong">

        <label for="">năm phát hành</label>
        <input type="text" placeholder="năm phát hành" name="namPhatHanh">

        <label for="">trailer</label>
        <input type="text" placeholder="trailer" name="trailer">

        <label for="">mô tả</label>
        <input type="text" placeholder="mô tả" name="moTa">
        <button type="submit">thêm phim</button>
    </form>
   </div>

    <?php
    //kiem tra co nhap du input khong
    if (!empty($_POST["idPhim"]) &&
        !empty($_POST["tenPhim"]) &&
        !empty($_POST["thoiLuong"]) &&
        !empty($_POST["namPhatHanh"]) &&
        !empty($_POST["trailer"]) &&
        !empty($_POST["moTa"])

    ) {
        $idPhim = $_POST["idPhim"];
        $tenPhim = $_POST["tenPhim"];
        $thoiLuong = $_POST["thoiLuong"];
        $namPhatHanh = $_POST["namPhatHanh"];
        $trailer = $_POST["trailer"];
        $mota = $_POST["moTa"];

        // ket noi dtb
        include("connect.php");
        $sql = "INSERT INTO `list_film`(`id_phim`, `ten_phim`, `thoi_luong`, `nam_phat_hanh`,
        `trailer`, `mo_ta`) VALUES ('$idPhim','$tenPhim','$thoiLuong','$namPhatHanh','$trailer',
        '$mota')";


        if(mysqli_query($conn, $sql)){
            header("Location: admin.php?page_layout=phim");
        }else{
            echo "lỗi". mysqli_error($conn);
        }
    } else {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            echo "vui lòng nhập đủ thông tin";
        }
    }
    ?>
</body>

</html>