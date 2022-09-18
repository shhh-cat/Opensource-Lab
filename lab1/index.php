<?php
// Start the session
session_start();
?>
<!doctype html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div class="container px-10 mx-auto">
  <?php 
        $tongdiem = "";
        $diemuutien = "";
        $xeploai = "";
        if (isset($_POST["submmit"])) {

            
            if(isset($_POST["toan"],$_POST["ly"],$_POST["hoa"],$_POST["khuvuc"])) {
                if (!empty($_POST["khuvuc"]))
                    $_SESSION["khuvuc"] = $_POST["khuvuc"];


                $tongdiem = (int)$_POST["toan"] + (int)$_POST["ly"] + (int)$_POST["hoa"];
                $diemuutien = 0;
                switch ($_POST["khuvuc"]) {
                    case '1':
                    case '2':
                        $diemuutien = 5;
                        break;
                    case '3':
                        $diemuutien = 3;
                        break;
                    default:
                        $diemuutien = 0;
                }
                


                $xeploai = null;
                if ($tongdiem >= 24)
                    $xeploai = "Giỏi";
                elseif ($tongdiem >= 21)
                    $xeploai = "Khá";
                elseif ($tongdiem >= 15)
                    $xeploai = "Trung bình";
                else    
                    $xeploai = "Yếu";
                
        
            }
        }
        

    ?>
    <div class="flex justify-start">
        <div class="text-xl font-bold">Xếp loại kết quả tuyển sinh</div>
    </div>
    <form class="grid grid-cols-2 gap-1 w-1/3" action="#" method="post">
        <div>Điểm môn Toán</div>
        <div>
            <input type="number" name="toan" class="border" />
        </div>
        <div>Điểm môn Lý</div>
        <div>
            <input type="number" name="ly" class="border" /> 
        </div>
        <div>Điểm môn Hóa</div>
        <div>
            <input type="number" name="hoa" class="border"/>
        </div>
        <div>Khu vực</div>
        <div>
            <select name="khuvuc" class="border">
                <option value="" <?php echo empty($_SESSION) ?  "selected" : "";?>>Chọn khu vực</option>
                <option value="1" <?php echo (!empty($_SESSION["khuvuc"]) && $_SESSION["khuvuc"] == 1) ?  "selected" : "";?>>Khu vực 1</option>
                <option value="2" <?php echo (!empty($_SESSION["khuvuc"]) && $_SESSION["khuvuc"] == 2) ?  "selected" : "";?>>Khu vực 2</option>
                <option value="3" <?php echo (!empty($_SESSION["khuvuc"]) && $_SESSION["khuvuc"] == 3) ?  "selected" : "";?>>Khu vực 3</option>
                <option value="4" <?php echo (!empty($_SESSION["khuvuc"]) && $_SESSION["khuvuc"] == 4) ?  "selected" : "";?>>Khu vực 4</option>
                <option value="5" <?php echo (!empty($_SESSION["khuvuc"]) && $_SESSION["khuvuc"] == 5) ?  "selected" : "";?>>Khu vực 5</option>
            </select>
        </div>
        <div class="col-span-2 flex justify-center">
            <button type="submit" name="submmit" class="rounded bg-gray-100 p-2">Xếp loại</button>
        </div>
    
    </form>

    <?php 
        echo '<div class="flex justify-start py-3"><div class="text-xl font-bold">Kết quả xếp loại</div></div>';
    
        echo '<div class="grid grid-cols-2 gap-1 w-1/3" action="#" method="post">';

        echo '<div>
        <div>Tổng điểm</div>
    </div>
    <div>
        '.$tongdiem.'
    </div>';

    echo '<div>
                <div>Xếp loại</div>
            </div>
            <div>
                '.$xeploai.'
            </div>';

                echo '<div>
                <div>Điểm ưu tiên</div>
            </div>
            <div>
                '.$diemuutien.'
            </div>';

                echo '</div>';
    
    ?>
    

  </div>
</body>
</html>