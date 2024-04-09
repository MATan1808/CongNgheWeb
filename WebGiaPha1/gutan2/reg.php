<?php
require "./connectdb.php";
$conn = connectdb();

if(isset($_POST['btn-reg'])){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $giftcode = $_POST['giftcode'];

    // Kiểm tra xem user và pass có được cung cấp hay không
    if(empty($user) || empty($pass)) {
        $txt_erro = "Bạn cần nhập đầy đủ thông tin cho TÊN ĐĂNG NHẬP và PASS.";
    } else {
        // Lấy mã giới thiệu dựa trên tên người dùng nhập vào
        $sql_get_giftcode = "SELECT giftcode FROM `tbl_user` WHERE `user` = '$giftcode'";
        $result_get_giftcode = $conn->query($sql_get_giftcode);
    
        // Kiểm tra xem có kết quả trả về từ truy vấn không
        if($result_get_giftcode) {
            $row = $result_get_giftcode->fetch(PDO::FETCH_ASSOC);
            // Kiểm tra xem có mã giới thiệu hợp lệ không
            if($row) {
                $valid_giftcode = $row['giftcode'];
            } else {
                $valid_giftcode = null; // Gán giá trị null nếu không tìm thấy mã giới thiệu
            }
        } else {
            $txt_erro = "Lỗi khi truy vấn cơ sở dữ liệu.";
        }
    
        // Kiểm tra xem mã giới thiệu có tồn tại và khớp với tên người dùng hay không
        if(empty($valid_giftcode)) {
            $txt_erro = " Mã giới thiệu không đúng.";
        } else {
            // Tiến hành thêm người dùng vào cơ sở dữ liệu
            $sql_check_user = "SELECT * FROM `tbl_user` WHERE `user` = '$user'";
            $result_check_user = $conn->query($sql_check_user);

            if ($result_check_user->rowCount() > 0) {
                $txt_erro = "Tên người dùng đã tồn tại. Vui lòng chọn tên người dùng khác.";
            } else {
                // Thêm người dùng vào cơ sở dữ liệu
                $sql_insert_user = "INSERT INTO `tbl_user`(`name`, `address`, `email`, `user`, `pass`, `giftcode`) VALUES (:name, :address, :email, :user, :pass, :giftcode)";
                $stmt_insert_user = $conn->prepare($sql_insert_user);
                $stmt_insert_user->bindParam(':name', $name);
                $stmt_insert_user->bindParam(':address', $address);
                $stmt_insert_user->bindParam(':email', $email);
                $stmt_insert_user->bindParam(':user', $user);
                $stmt_insert_user->bindParam(':pass', $pass);
                $stmt_insert_user->bindParam(':giftcode', $giftcode);

                if($stmt_insert_user->execute()){
                    $txt_erro = "Thêm thành công";
                    header('location: dn.php');
                } else {
                    $txt_erro = "Lỗi: Không thể thêm người dùng.";
                }
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng ký </title>
  <link rel="stylesheet" href="dangky1.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="btnback.css">
</head>
<body>
  <button id="backButton" onclick="goBack()">
    <i class="fas fa-arrow-left"></i> 
  </button>  
  <div class="signup">
    <div class="signup__container">
      <h1>Đăng Ký</h1>
      <form action="reg.php" method="post">
        <h5>Họ và tên</h5>
        <input type="text" name="name" class="input-signup-username" />
        <h5>Email </h5>
        <input type="text " name="email" class="input-signup-password" />
        <h5>Địa chỉ</h5>
        <input type="Text " name="address" class="input-signup-pass" />
        <h5>Tên đăng nhập *</h5>
        <input type="text" name="user" class="input-signup-hvt" />
        <h5>Password *</h5>
        <input type="password" name="pass" class="input-signup-password" />
        <h5>Tên người giới thiệu *</h5>
        <input type="text" name="giftcode" class="input-signup-intro-code" />
        <input type="submit" class="signup__signInButton" name="btn-reg" value="Đăng ký">
        <?php
            if(isset($txt_erro) && $txt_erro != "") {
                echo "<p style='color: red;'>".$txt_erro."</p>";
            }
        ?>
      </form>
      <a href="dn.php" class="signup__registerButton">Đăng nhập tài khoản</a>
    </div>
  </div>
</body>
<script src="btnback.js"></script>
</html>
