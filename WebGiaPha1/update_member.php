<!-- update_member.php -->
<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $memberID = $_POST['memberID'];
    $name = $_POST['name'];
    $content = $_POST['content'];

    // Update member data in the database
    $sql = "UPDATE generation_of_member SET Name_Generation_Of_Member = '$name', Data_Content_Member = '$content' WHERE MemberID = '$memberID'";
    
    if (mysqli_query($conn, $sql)) {
        // Đường dẫn trang hiển thị thông tin thành viên
        $redirectURL = "xemtieusu.php?memberID=$memberID";
        // Chuyển hướng trang sau khi cập nhật thành công
        header("Location: $redirectURL");
        exit();
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
