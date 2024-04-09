<?php
require "./connectdb.php";

// Kết nối cơ sở dữ liệu
$conn = connectdb();

// Kiểm tra xem bảng có tồn tại không
if ($conn->query("SHOW TABLES LIKE 'tbl_menber'")->rowCount() === 0) {
    echo "Lỗi: Bảng tbl_menber không tồn tại trong cơ sở dữ liệu.";
    exit;
}

// Truy vấn lấy thông tin người dùng vừa thêm vào
$sql_select_user = "SELECT * FROM `tbl_menber` ORDER BY id_menber DESC LIMIT 1";

// Chuẩn bị truy vấn
$stmt_select_user = $conn->prepare($sql_select_user);

// Thực thi truy vấn
$stmt_select_user->execute();

// Lấy kết quả dưới dạng mảng kết hợp
$user = $stmt_select_user->fetch(PDO::FETCH_ASSOC);

// Đóng kết nối
$conn = null;
?>
<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Các ô vuông động</title>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .container {
        display: flex;
        justify-content: center; /* Canh giữa theo chiều ngang */
        align-items: center; /* Canh giữa theo chiều dọc */
        flex-direction: column; /* Chỉ định cột flex cho các hàng */
        height: 100vh; /* Đảm bảo chiều cao của container tối đa là chiều cao của trình duyệt */
        position: relative; /* Để có thể định vị tuyệt đối cho nút "+" */
    }

    .row {
        display: flex; /* Sử dụng flexbox cho hàng */
    }

    .square {
        width: 170px; /* Độ rộng của ô vuông */
        height: 250px; /* Độ cao của ô vuông */
        background-color: white; /* Màu nền trắng */
        border: 1px solid black; /* Viền đen */
        margin: 10px; /* Khoảng cách giữa các ô */
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative; /* Để có thể định vị tuyệt đối cho nút "+" */
    }

    .square:hover {
        /* background-color: #f0f0f0; Màu nền nhạt khi di chuột qua */
    }

    .add-button {
        position: absolute; /* Định vị tuyệt đối */
        bottom: -10px; /* Đặt ở phía dưới */
        right: -10px; /* Đặt ở phía bên phải */
        margin: 5px;
       
        
       
        border: none;
       
        cursor: pointer;
    }
    .add-button1 {
        position: absolute; /* Định vị tuyệt đối */
        bottom: -10px; /* Đặt ở phía dưới */
        right: -10px; /* Đặt ở phía bên phải */
        margin: 5px;
       
        
        color: #fff; /* Màu chữ */
        border: none;
       
        cursor: pointer;
        
    }

    .add-button:hover {
        /* background-color: #0056b3; Màu nền nút khi di chuột qua */
    }


</style>
</head>
<body>
<div class="container">
    <div id="row1" class="row">
        <div class="square">
            <div>
                <p class="">
                    <img src="img/<?php echo $user["img_path"]; ?>" width="100px" title="<?php echo $user["img_path"]; ?>">
                </p>
                <br>
            </div>
            <div class="add-button">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i style="font-size:24px" class="fa">&#xf039;</i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="NhapThongTin.php"><i class="fa fa-pencil-square-o"
                                                                       style="font-size:24px"></i>Sửa</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="Trangchu.html"><i style="font-size:24px"
                                                                      class="fa">&#xf2bc;</i>Xem tiểu sử</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" id="addChildBtn"><i style="font-size:24px" class="fa">&#xf067;</i> Thêm con</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" id="addPartnerBtn"><i style="font-size:24px" class="fa">&#xf067;</i> Thêm vợ chồng</a>
                </div>
            </div>
        </div> <!-- Ô vuông rỗng đầu tiên -->
    </div>
    <div id="row2" class="row"></div>

</div>


<script>
    var container1 = document.getElementById('row1');
    var container2 = document.getElementById('row2');
    var addChildBtn = document.getElementById('addChildBtn');
    var addPartnerBtn = document.getElementById('addPartnerBtn');
    var squareCount = 1;

    // Hàm tạo ô vuông mới
    function createSquare(container) {
        // Tạo ô vuông mới
        var newSquare = document.createElement('div');
        newSquare.className = 'square';
        newSquare.textContent = squareCount;

        // Thêm ô vuông vào container phù hợp
        container.appendChild(newSquare);

        // Tăng số lượng ô vuông
        squareCount++;
    }

    // Sự kiện khi nhấn vào nút "Thêm con"
    addChildBtn.addEventListener('click', function () {
        createSquare(container2);
    });

    // Sự kiện khi nhấn vào nút "Thêm vợ chồng"
    addPartnerBtn.addEventListener('click', function () {
        createSquare(container1);
    });
</script>
</body>
</html>
