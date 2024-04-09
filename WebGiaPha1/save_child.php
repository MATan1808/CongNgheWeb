<?php
// Kết nối đến cơ sở dữ liệu
include 'db_connect.php';

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối không thành công: " . mysqli_connect_error());
}

// Kiểm tra xem yêu cầu là POST và có chứa dữ liệu không
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['childName'])) {
    // Lấy tên con từ yêu cầu POST
    $childName = $_POST['childName'];

    // Thực hiện truy vấn để lưu tên con vào cơ sở dữ liệu
    $sql = "INSERT INTO generation_of_member (Name_Generation_Of_Member, GenerationID) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    $generationID = 1; // Đây là ID của thế hệ hiện tại, bạn cần thay đổi nó tùy thuộc vào trang thái hiện tại của ứng dụng
    mysqli_stmt_bind_param($stmt, "si", $childName, $generationID);

    // Thực thi truy vấn
    if (mysqli_stmt_execute($stmt)) {
        // Lấy ID của bản ghi vừa được thêm vào bảng generation_of_member
        $lastInsertedID = mysqli_insert_id($conn);

        // Lấy ID của bố (cha) từ cơ sở dữ liệu, bạn cần thay đổi phần này tùy thuộc vào cách bạn lấy được ID của bố
        $fatherID = 2;

        // Thêm dữ liệu vào bảng relationship
        $relationshipSQL = "INSERT INTO relationship (Name_Type_RelationShip, FromGenerationID, ToGenerationID) VALUES (?, ?, ?)";
        $relationshipStmt = mysqli_prepare($conn, $relationshipSQL);

        // Giá trị của Name_Type_RelationShip là 'con'
        $relationshipName = 'con';

        // Giá trị của FromGenerationID là ID của bố (cha) và ToGenerationID là ID của con
        mysqli_stmt_bind_param($relationshipStmt, "sii", $relationshipName, $fatherID, $lastInsertedID);

        // Thực thi truy vấn thêm dữ liệu vào bảng relationship
        mysqli_stmt_execute($relationshipStmt);

        // Trả về phản hồi JSON nếu thành công
        echo json_encode(array("success" => true));
    } else {
        // Trả về phản hồi JSON nếu thất bại
        echo json_encode(array("success" => false));
    }

    // Đóng câu lệnh
    mysqli_stmt_close($stmt);
} else {
    // Trả về phản hồi JSON nếu không có dữ liệu được gửi đi
    echo json_encode(array("success" => false, "message" => "Dữ liệu không hợp lệ"));
}

// Đóng kết nối
mysqli_close($conn);
?>
