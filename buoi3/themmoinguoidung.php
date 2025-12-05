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
    <div class="container">
        <form action="" method="POST">
            <label for="">họ tên</label>
            <input type="text" placeholder="họ tên" name="hoTen">

            <label for="">tên đăng nhập</label>
            <input type="text" placeholder="tên đăng nhập" name="tenDn">

            <label for="">mật khẩu</label>
            <input type="text" placeholder="mật khẩu" name="pwd">


            <label for="">Email</label>
            <input type="text" placeholder="email" name="email">


            <label for="">ngày sinh</label>
            <input type="date" name="ngaySinh">

            <label for="">số điện thoại</label>
            <input type="number" placeholder="số điện thoại" name="sdt">

            <select name="id_quyen" id="">
                <option value="1">admin</option>
                <option value="2">user</option>
                <option value="3">đạo diễn</option>
                <option value="4">diễn viên</option>
            </select>
            <button type="submit">Thêm</button>
        </form>
        <?php
        // ket noi dtb
        include("connect.php");
        // KIEM TRA FORM
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

            $sql = "INSERT INTO `nguoi_dung`( `ten_dang_nhap`, `ho_ten`, `email`, `sinh_nhat`, `sdt`, `id_quyen`, `mat_khau`) VALUES
             ('$tenDn','$hoTen',' $email','$ngaysinh','$sdt','$id_quyen','$pwd')";

             // kiem tra dtb co them vao duoc khong 
             if(mysqli_query($conn,$sql)){
                header("Location: admin.php?page_layout=nguoidung");
             }else{
                echo "loi sql". mysqli_error($conn);
             }

        } else {
           if($_SERVER['REQUEST_METHOD']== 'POST'){
                echo "<p class= 'warning'> Vui lòng nhập đầy đủ thông tin ! </p>";
           }
        }
        ?>
    </div>
</body>

</html>