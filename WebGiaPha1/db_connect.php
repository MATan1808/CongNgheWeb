<!-- db_connect.php -->
<?php
$hostname = 'localhost';
$username = 'root';
$password = ''; // Thay thế bằng mật khẩu an toàn của bạn
$dbname = 'web_giapha';
$port = 3306;

$conn = mysqli_connect($hostname, $username, $password, $dbname, $port);

if (!$conn) {
    // Xử lý lỗi kết nối
    error_log('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
    exit('Có lỗi xảy ra, vui lòng thử lại sau.');
}

// Thiết lập bảng mã utf8
// echo("thanh cong");
// mysqli_close($conn);

?>