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
        $id = $_GET["id"];
        $sql = "SELECT*FROM the_loai WHERE id_the_loai = $id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

    ?>
    <div class="container">
    <form action="" method="POST">
        <label for="">thêm id thể loại</label>
        <input type="text" placeholder="thêm id" name="id_the_loai" value="<?php echo $row["id_the_loai"] ?>">

        <label for="">thêm tên thể loại</label>
        <input type="text" placeholder="thêm tên thể loại" name="ten_the_loai" value="<?php echo $row["ten_the_loai"] ?>">
        <button type="submit">cập nhật thể loại</button>
    </form>

    <?php
        if(!empty($_POST["id_the_loai"])&&
        !empty($_POST["ten_the_loai"])){

            $id_the_loai = $_POST["id_the_loai"];
            $ten_the_loai =  $_POST["ten_the_loai"];

            include("connect.php");
            $sql = "UPDATE `the_loai` SET `id_the_loai`=' $id_the_loai',`ten_the_loai`=' $ten_the_loai' WHERE id_the_loai=$id ";
            if(mysqli_query($conn, $sql)){
                header("Location: admin.php?page_layout=theloai");
            }else{
                echo "lỗi". mysqli_error($conn);
            }


        }else{
            if($_SERVER['REQUEST_METHOD']){
                echo "vui lòng nhập đủ thông tin !";
            }
        }
    ?>
    </div>

</body>
</html>