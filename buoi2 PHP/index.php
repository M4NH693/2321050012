<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-Buoi 2</title>
</head>

<body>
    <form action="" method="post">
        <h1>Dang Nhap</h1>
        <div>
            <input type="text" placeholder="nhap email hoac so dien thoai" name="username">
        </div>
        <div> <input type="password" placeholder="nhap mat khau" name="matkhau"></div>
        <div><button type="submit" name="submit">tinh</button></div>
    </form>

    <?php
        if(isset( $_POST["username"]) && isset($_POST["matkhau"])){
        $tenDangNhap = $_POST["username"];
        $matkhau = $_POST["matkhau"];

        if($tenDangNhap =='admin' && $matkhau == '123'){
           
            header('location : trangChu.php');
        }
        }
        // ten dang nhap = admin
        // mat khau 123 cho phep nguoi dung vao trang chu
        $cookieName = "user";
        $cookieValue = "Van Manh";

        setcookie($cookieName, $cookieValue, time()+ (86400), "/");
       
        if(isset($_COOKIE[$cookieName])){
            echo "cookie da ton tai";
        }else{
            echo "cookie chua tong tai";
        }
        
         //session luu thong tin o server // dung cho thong tin it quan trong
        //cookie luu thong tin o phia nguoi dung

        session_start();
        $_SESSION["name"] = "van manh";
        echo $_SESSION["name"];
    ?>
</body>

</html>