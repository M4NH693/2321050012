<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trang admin</title>
    <style>
        * {
            margin: 0;
        }

        ul {
            display: flex;
            list-style-type: none;
            align-items: center;
            padding: 20px;

            gap: 20px;
        }

        a {
            text-decoration: none;
        }

        .danh_muc {
            background-color: aqua;
            display: flex;
            justify-content: space-between;

        }
    </style>
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION["userName"])) {
        header("Location: login.php");
    }
    ?>
    <!-- thêm chức năng thêm, sửa, xóa -->

    <header>
        <div class="danh_muc">
            <ul>
                <!-- page_layout dùng để điều hướng giữa các trang -->
                <li class=""><a class="" href="admin.php?page_layout=trangchu">Trang chủ</a></li>
                <li class=""><a class="" href="admin.php?page_layout=phim">Phim</a></li>
                <li class=""><a class="" href="admin.php?page_layout=theloai">Thể loại</a></li>
                <li class=""><a class="" href="admin.php?page_layout=quocgia">Quốc gia</a></li>
                <li class=""><a class="" href="admin.php?page_layout=nguoidung">Người dùng</a></li>
                <li class=""><a class="" href="admin.php?page_layout=phimtheloai">phim thể loại</a></li>


            </ul>

            <ul>
                <li class=""><a class="" href=""><?php echo "xin chào " . $_SESSION["userName"]; ?></a></li>
                <li class=""><a class="" href="admin.php?page_layout=dangxuat">Đăng xuất</a></li>
            </ul>
        </div>

        <?php
        if (isset($_GET["page_layout"])) {

            switch ($_GET["page_layout"]) {
                case 'trangchu':
                    // include dùng để chèn trang mà không điều hướng qua 1 trang mới 
                    // file sẽ được chèn ở vị trí include đang đứng
                    include("trangchu.php");
                    break;
                case 'theloai':
                    include("theloai.php");
                    break;

                case 'quocgia':
                    include("quocgia.php");
                    break;

                case 'phim':
                    include("phim.php");
                    break;

                case 'nguoidung':
                    include("nguoidung.php");
                    break;

                case 'themmoinguoidung':
                    include("themmoinguoidung.php");
                    break;
                
                 case 'capnhatnguoidung':
                    include("capnhatnguoidung.php");
                    break; 

                 case 'themphim':
                    include("themphim.php");
                    break;      
                case 'xoaphim':
                    include("xoaphim.php");
                    break;   
                case 'phimtheloai':
                    include("phimtheloai.php");
                    break;                      


            }
        }
        ?>
    </header>
</body>

</html>