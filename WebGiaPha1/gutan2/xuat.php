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
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thông tin người dùng</title>
  <!-- Các thẻ link và script khác -->

  <!-- Thêm link đến file CSS của trang -->
  <link rel="stylesheet" href="dangky1.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="btnback.css">
  <!-- CSS cho thông tin người dùng -->
  <style>
    .info-box {
      border: 1px solid #ccc;
      padding: 10px;
      margin-bottom: 10px;
      border-radius: 5px;
      background-color: #f9f9f9;
    }
    .info-box p {
      margin: 5px 0;
    }
  </style>
</head>
<body>
  <button id="backButton" onclick="goBack()">
    <i class="fas fa-arrow-left"></i> 
  </button>  <!-- Nút quay về -->
  
  <!-- Hiển thị thông tin người dùng -->
  <div class="signup">
    <div class="signup__container">
      <h1>Thông tin chi tiết</h1>
      <form action="nhap.php" method="post">
        <!-- Hiển thị thông tin -->
        <h5>Họ và tên</h5>
        <p class="info-box"><?php echo $user['name']; ?></p>
        <h5>Giới tính</h5>
        <p class="info-box"><?php echo $user['sex']; ?></p>
        <h5>Email</h5>
        <p class="info-box"><?php echo $user['email']; ?></p>
        <h5>Địa chỉ</h5>
        <p class="info-box"><?php echo $user['address']; ?></p>
        <h5>Ngày tháng năm sinh</h5>
        <p class="info-box"><?php echo $user['birth_day']; ?></p>
        <h5>Ngày tháng năm mất (nếu có)</h5>
        <p class="info-box"><?php echo $user['day_death']; ?></p>
        <h5>Số điện thoại</h5>
        <p class="info-box"><?php echo $user['number_phone']; ?></p>
        <!-- Hiển thị hình ảnh -->
        <h5>Hình ảnh</h5>
        <p class="info-box">
        <img src="img/<?php echo $user["img_path"]; ?>" width = 200 title="<?php echo $user["img_path"]; ?>">
        </p>
        <!-- Hiển thị tiểu sử -->
        <h5>Tiểu sử</h5>
        <p class="info-box"><?php echo $user['mo_ta']; ?></p>
        <!-- Liên kết để sửa thông tin -->
        <a href="./NhapThongTin.php" class="info-box">Sửa thông tin</a>
      </form>
    </div>
  </div>
</body>
</html>
