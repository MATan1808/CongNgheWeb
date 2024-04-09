<?php
include 'db_connect.php';

// Lấy giá trị của tham số 'memberID' từ URL
$memberID = isset($_GET['memberID']) ? $_GET['memberID'] : '26';

// SQL query để lấy thông tin thành viên dựa trên memberID
$sql = "SELECT * FROM generation_of_member WHERE MemberID = '$memberID'";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thông Tin Thành Viên Gia Phả</title>
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
  </style>
  
</head>
<body>

  <nav>
    <ul>
      <li><a href="#">Trang Chủ</a></li>
      <li><a href="#">Liên Hệ</a></li>
      <li><a href="#"> </a></li>
      <!-- Thêm các mục menu khác nếu cần -->
    </ul>
  </nav>

  <h2>Hiển Thị-Thông Tin Chi Tiết</h2>
  <table>
    <?php
    // Check if there are any records in the result
    if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        $row = mysqli_fetch_assoc($result);
        foreach ($row as $key => $value) {
            echo "<tr>";
            echo "<td><strong>$key</strong></td>"; // Display column name as header
            echo "</tr>";
            echo "<tr>";
            echo "<td>$value</td>"; // Display column value
            echo "</tr>";
            
        }
    } else {
        echo "<tr><td colspan='2'>0 results</td></tr>";
    }

    // Close connection
    mysqli_close($conn);
    ?>
    <td><a href="edit_member.php?memberID=<?php echo $row['MemberID']; ?>">Sửa</a></td>
</table>





</body>
</html>
