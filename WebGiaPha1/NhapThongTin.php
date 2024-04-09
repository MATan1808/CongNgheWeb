

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nhập thông tin </title>
  <!-- Các thẻ link và script khác -->

  <!-- Thêm link đến file CSS của trang đăng ký -->
  <link rel="stylesheet" href="dangky1.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="btnback.css">
    <!-- Liên kết đến trang PHP để xử lý đăng ký -->
</head>
<body>
  <button id="backButton" onclick="goBack()">
    <i class="fas fa-arrow-left"></i> 
</button>  <!-- Thêm nút quay về -->
  <!-- Form đăng ký -->
  <div class="signup">
    <div class="signup__container">
      <h1 >Thông tin chi tiết</h1>
      <form action="nhap.php" method="post" action="your_action_file.php" enctype="multipart/form-data">
        <h5>Họ và tên</h5>
        <input type="text" name="name" class="input-signup-username" />
        <h5 style="margin-bottom: 5px;">Giới tính</h5>
        <select name="sex" class="input-signup-intro-code" style="padding: 7px;">
          <option value="Nam">Nam</option>
          <option value="Nữ">Nữ</option>
          <option value="other">Khác</option>
        </select>
        <h5 style="margin-top: 20px;">Email</h5>
        <input type="text " name="email" class="input-signup-password" />
        <h5>Địa chỉ</h5>
        <input type="Text " name="address" class="input-signup-pass" />
       
        <h5>Ngày tháng năm sinh *</h5>
        <input type="date" name="birth_day" class="input-signup-intro-code" />
        <h5>Ngày tháng năm mất (nếu có)</h5>
        <input type="date" name="day_death" class="input-signup-intro-code" />
      
        <h5 style="margin-top: 20px;">Số điện thoại</h5>
        <input type="text" name="number_phone" class="input-signup-intro-code" />
        <h5>Hình ảnh</h5>
        <!-- <input type="file" name="img" class="input-signup-intro-code" />  -->
        <input type="file" name="img" id="img " accept=".jpg, .jpeg, .png" class="input-signup-intro-code" /> 
        <h5>Tiểu sử</h5>
        <textarea class="input-signup-intro-code" name="mo_ta"></textarea>
        <input style="margin-top: 20px;" name="btn-reg1" type="submit"  class="signup__signInButton" value="Lưu thông tin">
       
      </form>
      <!-- Thêm liên kết đến trang đăng nhập -->
    
    </div>
  </div>
  

</body>
</html>
