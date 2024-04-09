<!-- admin.php -->
<?php
include('db_connect.php');

$sql = "SELECT * FROM tbl_menber WHERE id_generations = 3"; // Thêm điều kiện WHERE vào câu truy vấn
$result = mysqli_query($conn, $sql);
if (!$result) {
    die('Query failed: ' . mysqli_error($conn));
} else {
    echo "  Query successful";
}

$sql_generations = "SELECT * FROM generations WHERE id_generations = 3"; // Thêm điều kiện WHERE vào câu truy vấn
$result_generations = mysqli_query($conn, $sql_generations);

if (!$result_generations) {
    die('Query failed: ' . mysqli_error($conn));
}

$row_generations = mysqli_fetch_assoc($result_generations);

if ($row_generations) {
    $generation_name = $row_generations['name_generations'];
} else {
    $generation_name = "Dòng họ không tồn tại"; // Hoặc một giá trị mặc định khác tùy thuộc vào yêu cầu của bạn.
}
?>

<!-- admin.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="./css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="Admin.css">
    <link rel="stylesheet" href="btnback.css">
    <!-- <link rel="stylesheet" href="thong.css.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .square {
            width: 170px;
            /* Độ rộng của ô vuông */
            height: 300px;
            /* Độ cao của ô vuông */
            background-color: white;
            /* Màu nền trắng */
            border: 1px solid black;
            /* Viền đen */
            margin: 10px;
            /* Khoảng cách giữa các ô */
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            /* Để có thể định vị tuyệt đối cho nút "+" */
        }
       .square img{
        width: 100px;
        height: 150px;
        position: absolute;
        top: 1px;
        right: 35px;

        }
        .square .info{
            width: 100px;
        height: 150px;
        position: absolute;
        bottom: 0px;
        right: 30px;
        }
    </style>
</head>
<!-- s -->

<!-- s -->

<body>
    <div class="container-fluide" style="background-color:  #ecde429e;">
        <div class="container">
            <!-- Thêm nút quay về -->
            <!-- <a href="#" id="backButton">
                    <span>&#9664;</span> Quay về
                </a> -->
            <div class="row">
                <div class="col-lg-2 " style="padding-left: -12px;">
                    <div class="logo">
                        <a href="Trangchu.html">
                            <img src="./image/logo_web.png" alt="Logo" width="190" height="100">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 thanhheader" style="float:right">


                    <!-- Thêm nút quay về -->
                    <button id="backButton" onclick="goBack()">
                        <i class="fas fa-arrow-left"></i>
                    </button>

                </div>
                <!--thanhheader-->
                <div class="row">
                    <div class="col-lg-12 taikhoan">
                        <div class="account-icon"></div> <!-- Hình ảnh hình tròn ở đây -->
                        <div class="account-text">
                            <div class="">
                                <a>
                                    <p>Tài Khoản</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
<div>
        <div class="container" style="margin-top: 20px;">
            <h2>Thành viên dòng họ <?php echo $generation_name; ?></h2>
           


            <?php
$count = 0; // Đếm số lượng thành viên đã xuất
echo "<div class='row' style='display: flex; justify-content: center;'>"; // Bắt đầu một hàng mới và căn giữa các ô
while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='square' data-id='{$row['id_menber']}'style='text-align: center;'>"; // Căn giữa nội dung
    echo "<br><img src='img/{$row['img_path']}'  title='{$row['img_path']}'><br>"; // Xuất hình ảnh
    echo "<div class='info'>"; // Bắt đầu phần thông tin
    echo "{$row['id_menber']}<br>";
    echo "{$row['name']}<br>";
    echo "{$row['sex']}<br>";

    echo "{$row['birth_day']}";
    echo "</div>"; // Kết thúc phần thông tin
    echo "</div>"; // Kết thúc ô

    $count++;
    if ($count ==2) { // Kiểm tra nếu đã đủ 2 thành viên
        echo "</div>"; // Kết thúc hàng sau mỗi 2 thành viên
        echo "<div class='row' style='display: flex; justify-content: center;'>"; // Bắt đầu một hàng mới và căn giữa các ô
    }
}
// if ($count % 2 != 0) { // Kiểm tra xem có cần thêm một hàng cuối không
//     echo "</div>"; // Kết thúc hàng cuối cùng nếu có số thành viên là số lẻ
// }
?>





        </div>
        </div>


</body>

<script src="btnback.js"></script>

</html>