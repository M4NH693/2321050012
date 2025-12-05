<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name = "userName" placeholder="Enter UserName">
        <input type="password" name = "pwd" placeholder="Enter PassWord">
        <button type="submit">Submit</button>
    </form>

    <?php
    include('connect.php');
    if(isset($_POST["userName"]) && isset($_POST["pwd"])){
        $tenDN = $_POST["userName"];
        $pwd = $_POST["pwd"];

        $sql = "SELECT * FROM nguoi_dung WHERE ten_dang_nhap = '$tenDN' AND mat_khau = '$pwd'";
        // echo $sql;

        $result = mysqli_query($conn, $sql);

        // nếu có kết quả (result > 0)
        if(mysqli_num_rows($result) > 0){
            session_start();
            $_SESSION["userName"] = $tenDN;
            header("Location: admin.php");
        }else{
            echo "sai thong tin dang nhap!";
        }

       
    }
      

        
    ?>

</body>
</html>