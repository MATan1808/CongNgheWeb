<?php
include 'database_connection.php'; // Đường dẫn đến file kết nối CSDL

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Xử lý file upload
    $target_dir = "uploads/";
    $avatarName = basename($_FILES["avatar"]["name"]);
    $target_file = $target_dir . $avatarName;
    if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
        $avatarUrl = '/path_to_your_uploads_folder/' . $avatarName; // Sửa đường dẫn cho phù hợp
    } else {
        $avatarUrl = ''; // hoặc đường dẫn ảnh mặc định nếu upload không thành công
    }

    // Lấy dữ liệu từ form
    $name = $_POST['name'];
    $birthYear = $_POST['birthYear'];
    $deathYear = $_POST['deathYear'] ?? null; // Sử dụng null nếu không có năm mất

    // SQL để chèn dữ liệu
    $sql = "INSERT INTO generations (name, birth_year, death_year, avatar) VALUES (?, ?, ?, ?)";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("siis", $name, $birthYear, $deathYear, $avatarUrl);
        
        if ($stmt->execute()) {
            // Trả về thông tin của đời mới để cập nhật giao diện
            echo json_encode([
                "success" => true,
                "newGeneration" => [
                    "name" => $name,
                    "birthYear" => $birthYear,
                    "deathYear" => $deathYear,
                    "avatar" => $avatarUrl
                ]
            ]);
        } else {
            echo json_encode(["success" => false, "error" => "Không thể thêm dữ liệu vào CSDL."]);
        }
        $stmt->close();
    } else {
        echo json_encode(["success" => false, "error" => "Lỗi khi chuẩn bị câu lệnh SQL."]);
    }
    $conn->close();
} else {
    echo json_encode(["success" => false, "error" => "Phương thức request không hợp lệ."]);
}
?>

       
