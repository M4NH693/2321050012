<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buổi 1 PHP</title>
</head>
<body>
    <?php
    // in ra man hinh
    echo"xin chao the gioi !";
    echo "hi";

    // khai bao bien
    //cu phap $ + ten bien = gia tri muon gan
    $ten = "nguyen manh";
    $tuoi = 100;

    echo $ten. " " . $tuoi. "Tuổi <br>";

    // hang
    define("sopi","3.14");
    echo sopi."<br>";

    // phan biet '' va ""
    echo '$ten'. "<br>"; // phan nay loi
    echo "$ten"; // phan nay se in ra ten

    // chuoi
    # kiem tra do dai cua chuoi
    echo strlen($ten) ."<br>";
    # dem so tu 
    echo str_word_count($ten) ."<br>";
    # tim kiem ky tu
    echo strpos($ten, "a")."<br>";
    # thay the ki tu trong chuoi
    echo str_replace("a","1", $ten) ."<br>";
    # toan tu +-*/
    $a =10;
    $b = 5;
    echo $a * $b. "<br>";
     # gan += -= *= /=
    
    # so sanh == >< >= <= ===
    echo $a > $b ?"":"";

    // 7.cau dieu kien | kiểm tra tổng của số thứ nhất và số thứ 2 
    $c= $a + $b;
    echo $c."<br>";
    if($c == 15){
        echo "tông bằng 15";
    }elseif($c < 15){
        echo "tổng bé hơn 15";
    }else{
        echo "tổng lớn hơn 15";
    }

    # swich case
    $color = "red";
    switch($color){
        case "red":
            echo"red";
            break;
        case "blue":
            echo"is blue";
            break;
        default:
            echo "no color";
            break;        
    }

    #for
    for($i = 0; $i < 10; $i++){
        echo $i. "<br>";
    }

    # mang
    $mang = ["an", "nhat anh", "trung kien"];
    #dem phan tu trong mang
    echo count($mang) ."<br>";
    echo$mang[1]."<br>";
    # in full mamg
    print_r($mang)."<br>";
    $mang[1] = "LOC SHADOW";
    print_r($mang)."<br>";
    # XOA 
    unset($mang[1]);
    print_r($mang)."<br>";
     ?>
</body>
</html>