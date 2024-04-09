<!-- edit_member.php -->
<?php
include 'db_connect.php';

if (isset($_GET['memberID'])) {
    $memberID = $_GET['memberID'];

    // Fetch member data based on memberID
    $sql = "SELECT * FROM generation_of_member WHERE MemberID = '$memberID'";
    $result = mysqli_query($conn, $sql);
    $memberData = mysqli_fetch_assoc($result);

    if (!$memberData) {
        echo "Không tìm thấy thông tin thành viên.";
        exit;
    }
} else {
    echo "Không có ID thành viên được cung cấp.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Thông Tin Thành Viên</title>
    <!-- CSS styles -->
    <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 20px;
      background-color: #9c700f;
    }

    nav {
      background-color: #9c700f;
      padding: 10px 0;
      display: flex;
      justify-content: flex-end; /* Hiển thị ở góc phải */
    }

    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      display: flex;
    }

    nav li {
      margin-right: 20px;
    }

    nav a {
      text-decoration: none;
      color: white;
      font-weight: bold;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
      background-color: #f0e08abb;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    th, td {
      padding: 15px;
      text-align: left;
      border-bottom: 1px solid #f0e08abb;
    }

    th {
      background-color: #f0e08abb;
      color: #333;
    }

    h2 {
      color: #333;
    }

    .history-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
      background-color: #f0e08abb;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .history-table th, .history-table td {
      padding: 15px;
      text-align: left;
      border-bottom: 1px solid #f0e08abb;
    }

    .history-table th {
      background-color: #f0e08abb;
      color: #333;
    }

    table img {
      width: 100px; /* Đặt chiều rộng mong muốn */
      height: 150px; /* Tự động tính toán chiều cao để giữ tỷ lệ khung hình */
      border-radius: 10%; /* Bo tròn hình ảnh */
    }
    /* Background color */


/* Font family */
body {
    font-family: 'Lato', sans-serif; /* Example of a modern sans-serif font */
}

/* Text color */


/* Input fields */
input[type="text"] {
    width: 200PX;
   
    background-color: #f0e08abb; /* White background for inputs */
    border-bottom: 1px solid #f0e08abb;/* Light gray border */
    border-radius: 5px; /* Rounded corners */
    padding: 10px; /* Comfortable spacing for text */
}
textarea {
    width: 200PX;
    height: 250PX;
    background-color: #f0e08abb; /* White background for inputs */border-bottom: 1px solid #f0e08abb; /* Light gray border */
    border-radius: 5px; /* Rounded corners */
    padding: 10px; /* Comfortable spacing for text */
}

/* Form button */
input[type="submit"] {
    background-color: #337ab7; /* Accent color */
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
}

  </style>
</head>
<body>
    <h2>Sửa Thông Tin Thành Viên</h2>
    <form action="update_member.php" method="POST">
        <input type="hidden" name="memberID" value="<?php echo $memberID; ?>">
        <label for="name">Tên Thế Hệ Thành Viên:</label><br>
        <input type="text" id="name" name="name" value="<?php echo $memberData['Name_Generation_Of_Member']; ?>"><br>
        <label for="content">Nội Dung Thành Viên:</label><br>
        <textarea id="content" name="content"><?php echo $memberData['Data_Content_Member']; ?></textarea><br>
        <input type="submit" value="Lưu">
    </form>
</body>
</html>