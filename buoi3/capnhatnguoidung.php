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
    <?php
        include("connect.php");
        $id=$_GET["id"];
        $sql = "SELECT * FROM nguoi_dung WHERE id_nguoi_dung = $id";
        $result = mysqli_query($conn, $sql);
        $nguoidung = mysqli_fetch_assoc($result);

    ?>
    <div class="container">
          <form action="" method="POST">

        <label>Họ tên</label>
        <input type="text" name="hoTen" value="<?php echo $nguoidung['ho_ten']; ?>">

        <label>Tên đăng nhập</label>
        <input type="text" name="tenDn" value="<?php echo $nguoidung['ten_dang_nhap']; ?>">

        <label>Mật khẩu</label>
        <input type="text" name="pwd" value="<?php echo $nguoidung['mat_khau']; ?>">

        <label>Email</label>
        <input type="text" name="email" value="<?php echo $nguoidung['email']; ?>">

        <label>Ngày sinh</label>
        <input type="date" name="ngaySinh" value="<?php echo $nguoidung['sinh_nhat']; ?>">

        <label>Số điện thoại</label>
        <input type="number" name="sdt" value="<?php echo $nguoidung['sdt']; ?>">

        <label>Quyền</label>
        <select name="id_quyen" id="vai_tro">
            <option value="1" <?php if($nguoidung['id_quyen']==1) echo "selected"; ?>>Admin</option>
            <option value="2" <?php if($nguoidung['id_quyen']==2) echo "selected"; ?>>User</option>
            <option value="3" <?php if($nguoidung['id_quyen']==3) echo "selected"; ?>>Đạo diễn</option>
            <option value="4" <?php if($nguoidung['id_quyen']==4) echo "selected"; ?>>Diễn viên</option>
        </select>

        <button type="submit">Cập nhật</button>
        </form>
        <?php
            // kiem tra xem co thay du du lieu khong 
            if (
            !empty($_POST["hoTen"]) &&
            !empty($_POST["tenDn"]) &&
            !empty($_POST["pwd"]) &&
            !empty($_POST["email"]) &&
            !empty($_POST["ngaySinh"]) &&
            !empty($_POST["sdt"]) &&
            !empty($_POST["id_quyen"])
        ) {
            $hoTen = $_POST["hoTen"];
            $tenDn = $_POST["tenDn"];
            $pwd = $_POST["pwd"];
            $email = $_POST["email"];
            $ngaysinh = $_POST["ngaySinh"];
            $sdt = $_POST["sdt"];
            $id_quyen = $_POST["id_quyen"];


            $sql = "UPDATE nguoi_dung
             SET ten_dang_nhap='$tenDn',`ho_ten`='$hoTen',`email`='$email',`sinh_nhat`='$ngaysinh',`sdt`='$sdt',
             `id_quyen`='$id_quyen',`mat_khau`='$pwd' WHERE id_nguoi_dung = $id ";

             if(mysqli_query($conn,$sql)){
                header("Location: admin.php?page_layout=nguoidung");
             }else{
                echo "lỗi".mysqli_error($conn);
             }
        }else{
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                echo "vui lòng nhập đủ thông tin !";
            }
        }
        ?>
    </div>
</body>
</html>