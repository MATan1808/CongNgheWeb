<?php
require "./connectdb.php";
$conn = connectdb();

if (isset($_POST['btn-reg1'])) {
  // In dữ liệu POST để debug
  print_r($_POST);

  // Lấy dữ liệu từ form
  $name = $_POST['name'];
  $sex = $_POST['sex'];
  $address = $_POST['address'];
  $email = $_POST['email'];
  $birth_day = $_POST['birth_day'];
  $day_death = $_POST['day_death'];
  $number_phone = $_POST['number_phone'];
  $mo_ta = $_POST['mo_ta'];

 
  if (isset($_FILES["img"])) {
    // Kiểm tra lỗi tải lên
    if ($_FILES["img"]["error"] === UPLOAD_ERR_OK) {
        // Lấy thông tin hình ảnh
        $fileName = $_FILES["img"]["name"];
        $fileSize = $_FILES["img"]["size"];
        $tmpName = $_FILES["img"]["tmp_name"];

        // Kiểm tra định dạng và kích thước
        $validExtensions = ['jpg', 'jpeg', 'png'];
        $imageExtension = pathinfo($fileName, PATHINFO_EXTENSION);
        $imageExtension = strtolower($imageExtension);

        if (!in_array($imageExtension, $validExtensions)) {
            echo "<script>alert('Định dạng hình ảnh không hợp lệ');</script>";
        } elseif ($fileSize > 1000000) {
            echo "<script>alert('Kích thước hình ảnh quá lớn');</script>";
        } else {
            // Tạo tên mới cho hình ảnh
            $newImageName = uniqid() . '.' . $imageExtension;

            // Di chuyển hình ảnh vào thư mục
            $uploadPath = 'img/' . $newImageName;
            if (move_uploaded_file($tmpName, $uploadPath)) {
                // Lưu dữ liệu người dùng
                $sql = "INSERT INTO `tbl_menber` (`name`, `sex`, `address`, `email`, `birth_day`, `day_death`, `number_phone`, `mo_ta`, `img_path`) VALUES (:name, :sex, :address, :email, :birth_day, :day_death, :number_phone, :mo_ta, :img_path)";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':address', $address);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':birth_day', $birth_day);
                $stmt->bindParam(':day_death', $day_death);
                $stmt->bindParam(':sex', $sex);
                $stmt->bindParam(':number_phone', $number_phone);
                $stmt->bindParam(':mo_ta', $mo_ta);
                $stmt->bindParam(':img_path', $newImageName);

                if ($stmt->execute()) {
                    $txt_erro = "Thêm thành công";
                    header('location: xuat.php');
                    exit;
                } else {
                    $txt_erro = "Lỗi: Không thể thêm người dùng.";
                }
            } else {
                echo "<script>alert('Lỗi khi di chuyển hình ảnh');</script>";
            }
        }
    } else {
        echo "<script>alert('Lỗi khi tải lên hình ảnh');</script>";
    }
} else {
    echo "<script>alert('Vui lòng chọn hình ảnh');</script>";
}
}
?>
