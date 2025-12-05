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
            <label for="">nhập id quốc gia</label>
            <input type="text" placeholder="nhập id quốc gia" name="id_quoc_gia">

            <label for="">nhập tên quốc gia</label>
            <input type="text" placeholder="nhập tên quốc gia" name="ten_quoc_gia">
            <button>thêm quốc gia</button>
        </form>

        <?php
            if( !empty($_POST["id_quoc_gia"])&&
                !empty($_POST["ten_quoc_gia"])
            ){
                $id_quoc_gia = $_POST["id_quoc_gia"];
                $ten_quoc_gia = $_POST["ten_quoc_gia"];

                include("connect.php");
                $sql ="INSERT INTO `quoc_gia`(`id_quoc_gia`, `ten_quoc_gia`) VALUES ('  $id_quoc_gia',' $ten_quoc_gia')";
                if(mysqli_query($conn,$sql)){
                    header("Location: admin.php?page_layout=quocgia");
                }else{
                    echo "loi". mysqli_error($conn);
                }
            }else{
                if($_SERVER['REQUEST_METHOD'] == "POST"){
                    echo "VUI LÒNG NHẬP ĐỦ DỮ LIỆU !";
                }
            }
        ?>
    </div>
</body>
</html>