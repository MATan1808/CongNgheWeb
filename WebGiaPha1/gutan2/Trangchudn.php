<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TrangChu</title>
  <link rel="stylesheet" href="chatbot.css">
  <link href="./css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="btnback.css">
<link rel="stylesheet" href="Trangchu.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
  .sp {
    width: 300px;
    margin: 10px;
    position: relative;
    float: left;
    overflow: hidden;
  }

  .sp img {
    width: 100%;
    transition: transform 3s;
  }

  .sp:hover img {
    transform: scale(1.5);
  }

  .motasp {
    position: absolute;
    color: rgb(247, 255, 197);
    font-size: 14px;
    font-family: Arial;
    background: rgba(24, 24, 24, 0.59);
    width: 310px;
    padding: 10px;
    left: 0px;
    bottom: 0px;
    margin-bottom: 0px;
    line-height: 20px;
    opacity: 0;
    transition: opacity 3s;
  }

  .sp:hover .motasp {
    opacity: 1;
  }

  .motasp>b {
    color: #db611c;
  }

  .hinhsp {
    width: 300px;
  }
</style>
</head>

<body>
  <div class="container-fluide" style="background-color:  #f6fdc3;">
    <!-- Thêm nút quay về -->
    <button id="backButton" onclick="goBack()">
      <i class="fas fa-arrow-left"></i>
    </button> <!-- Thêm nút quay về -->

    <div class="container" style="background-color:  #f6fdc3;">
      <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container">
          <a class="navbar-brand" href="Admin.php">
            <img src="./image/logo_web.png" alt="Logo" width="100%">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="Trangchu.html">Trang chủ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Caygiapha.php">Cây gia phả</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  User
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="NhapThongTin.php">Thông tin người dùng</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="Trangchu.html">Đăng xuất</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <!-- anh backgourd -->
  </div> 
  <div class="container-fluide" style="background-color:  #f6fdc3;">
    <!-- Thêm nút quay về -->
    <button id="backButton" onclick="goBack()">
      <i class="fas fa-arrow-left"></i>
    </button> <!-- Thêm nút quay về -->



    <!-- anh backgourd -->
  </div>

  <div class="container-fluide">
    <div class="rounded-box">
      <div class="phimdecu" style="    
            background-color:#ffcf96;
            padding-top: -10px;
            border-radius: 4px;
            text-align: center;
            font-size: 25px;
            margin-top: 5px ;
            ">
        <a href="#" class="l" style=" color: white;
                text-decoration: none;">
          Các cây gia phả gợi ý
        </a>
      </div>
    </div>
  </div>

  <div class="container-fluide">

    <div class="container">

      <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./image/hinh_12.1.jpg" alt="Los Angeles" width="1100px" height="500px">
          </div>
          <div class="carousel-item">
            <img src="./img/hinh_2.1.jpg" alt="Chicago" width="1100" height="500">
          </div>
          <div class="carousel-item">
            <img src="./img/hinh_4.1.jpg" alt="New York" width="1100" height="500">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </div>
  </div>

  </div>
  </div>
  <div class="container-fluide" style="background-color: #ffcf96; padding: 15px; margin:15px">
    <div class="container" style="padding-top: 30px;">
      <div class="row">
        <div class="col-lg-6">
          <h2>Giới thiệu các chức năng</h2>
          <p style="padding: 40px;color: #804000; font-size: 20px;"><b>Xem thông tin cá nhân từng thành viên<br>
              Xem cây gia phả và các mối liên hệ giữa các thành viên <br>
              Tìm kiếm thành viên theo các tiêu chí: tên, quan hệ <br>
              Đăng nhập, Đăng ký tài khoản <br>
              Quản lý thông tin thành viên: Thêm, sửa, xóa <br>
              Phân quyền người dùng<br>
              Lọc, tìm kiếm kết quả nâng cao <br>
              Gửi thông báo tự dộng đến các thành viên <br>
              Bảo mật thông tin cá nhân </p>
          </b>
        </div>
        <div class="col-lg-6">
          <img src="./img/hinh_7.jpg" alt="" style="width: 75%;">
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluide" style="padding: 15px; ">
    <div class="container"> <a href="hienthithongtinchitiet.html" style="color: black;">
        <h3>Xem thông tin cá nhân từng thành viên</h3>
      </a>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8"> <img src="./image/hinh_23.png" alt=""></div>
        <div class="col-lg-4">
          <p style="font-size: 20px;">1. Người dùng truy cập vào trang gia phả trên website.<br>
            2. Người dùng tìm kiếm hoặc chọn thành viên gia phả mà họ muốn xem thông tin.<br>
            3. Hệ thống hiển thị thông tin chi tiết của thành viên trong gia phả, bao gồm tên, ngày sinh, quan hệ gia đình, và các thông tin khác liên quan. <br>
            4. Người dùng đọc và xem thông tin cá nhân của thành viên trong gia phả. <br></p>
        </div>

      </div>
    </div>
  </div>
  <div class="container-fluide" style="background-color: #f6fdc3; padding: 15px;margin:15px">
    <div class="container">
      <h3>Xem cây gia phả và các mối liên hệ giữa các thành viên</h3>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <p style="font-size: 20px; color: #804000;">1.Người dùng truy cập trang Xem Cây Gia Phả. <br>
            2.Hệ thống hiển thị biểu đồ gia phả bắt đầu từ người dùng hoặc thành viên cụ thể. <br>
            3.Người dùng có thể dễ dàng di chuyển giữa các thế hệ và nhấp vào thành viên để xem thông tin chi tiết. <br>
            4.Biểu đồ màu sắc và các biểu tượng giúp phân biệt giới tính và mối quan hệ gia đình. <br>
            5.Hiển thị mối liên hệ gia đình qua các đường nối hoặc biểu tượng đặc biệt. <br></p>
        </div>
        <div class="col-lg-6"> <img src="./img/hinh_5.jpg" alt=""></div>
      </div>
    </div>
  </div>
  <div class="container-fluide" style="padding: 15px;">
    <div class="container"> <a href="trangtimkiem+hienthi.html" style="color: black;">
        <h3>Tìm kiếm thành viên theo các tiêu chí: tên, quan hệ</h3>
      </a>
    </div>
    <div class="container">
      <div class="row">
        <div> <img src="./image/hinh_21.png" alt=""></div>
        <div>
          <p style="font-size: 20px;">1.Người dùng truy cập vào trang Tìm Kiếm Thành Viên. <br>
            2.Hệ thống hiển thị giao diện tìm kiếm với các ô nhập liệu cho các tiêu chí tìm kiếm như tên, quan hệ, giới tính, và ngày sinh. <br>
            3.Người dùng nhập thông tin cụ thể hoặc một phần thông tin cần tìm kiếm. <br>
            4.Người dùng nhấn nút tìm kiếm để hệ thống trả về kết quả dựa trên các tiêu chí đã nhập. <br>
            5.Hệ thống hiển thị danh sách thành viên thỏa mãn các tiêu chí tìm kiếm, kèm theo thông tin chi tiết về mỗi thành viên <br>
          </p>
        </div>

      </div>
    </div>
  </div>
  <div class="container-fluide" style="background-color: #ffcf96; padding: 15px;">
    <div class="container">
      <h3>Quản lý thông tin thành viên: Thêm, sửa, xóa </h3>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <a style="text-align: center;">
            <h3>THÊM</h3> <br>
          </a>

          <div class="sp">
            <img src="./image/hinh_16.jpg" />
            <p class="motasp">1. Chọn vào "DANH SÁCH GIA PHẢ" <br>
              2. Chọn vào gia phả cụ thể mà họ muốn thêm thành viên. <br>
              3. Chọn vào nút "THÊM THÀNH VIÊN" <br>
              4. Người sử dụng tiến hành nhập các thông tin cần thiết để tạo mới thành viên trong gia phả. <br>
              5. Chọn vào "LƯU" để tiến hành thêm mới thành viên. <br>
              6. Hệ thống sẽ kiểm tra các thông tin vừa nhập xem có hợp lệ hay không. <br>
              7. Thông tin hợp lệ, hệ thống thêm thành viên vào gia phả và hiển thị thông báo thành công. <br>
              8. Hệ thống chuyển về trang gia phả để người dùng kiểm tra danh sách thành viên mới được cập nhật. <br>
            </p>
          </div>

        </div>
        <div class="col-lg-4">
          <a style="text-align: center;">
            <h3>SỬA</h3> <br>
          </a>
          <div class="sp">
            <img src="./image/hinh_17.jpg" />
            <p class="motasp"> 1. Chọn vào "THÔNG TIN CÁ NHÂN" <br>
              2. Hệ thống hiển thị thông tin chi tiết của thành viên và cung cấp chức năng sửa thông tin. <br>
              3. Người sử dụng tiến hành chỉnh sửa các thông tin cần thiết của bản thân. <br>
              4. Chọn vào "LƯU" để lưu lại các thay đổi. <br>
              5. Hệ thống sẽ kiểm tra các thông tin đã được sửa xem có hợp lệ hay không. <br>
              6. Thông tin hợp lệ, hệ thống cập nhật thông tin thành viên và hiển thị thông báo thành công. <br>
              7. Hệ thống chuyển về trang gia phả để người dùng kiểm tra thông tin đã được cập nhật. <br>
            </p>
          </div>



        </div>
        <div class="col-lg-4">
          <a style="text-align: center;">
            <h3>XÓA</h3> <br>
          </a>
          <div class="sp">
            <img src="./image/hinh_18.jpg" />
            <p class="motasp"> 1. Chọn vào "DANH SÁCH GIA PHẢ" <br>
              2. Chọn vào gia phả cụ thể mà họ muốn xóa thành viên. <br>
              3. Người sử dụng tìm và chọn thành viên mà họ muốn xóa. <br>
              4. Hệ thống hiển thị thông tin chi tiết của thành viên và cung cấp chức năng xóa thành viên. <br>
              5. Người sử dụng chọn vào nút "XÓA". <br>
              6. Hệ thống hiển thị cảnh báo xác nhận xóa thành viên và yêu cầu người sử dụng xác nhận lần nữa. <br>
              7. Người sử dụng chọn vào nút "XÁC NHẬN XÓA". <br>
              8. Hệ thống xóa thành viên khỏi gia phả và hiển thị thông báo xóa thành công. <br>
            </p>
          </div>
        </div>
        <!-- <div class="col-lg-6"> <img src="./img/hinh_5.jpg" alt=""></div> -->
      </div>
    </div>
  </div>
  <div class="container">
    <h3>Phân quyền người dùng</h3>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <p style="font-size: 20px;">1. Quản lý website đăng nhập vào hệ thống với tư cách quản trị. <br>
          2. Truy cập vào trang quản trị và tìm đến chức năng "PHÂN QUYỀN TRUY CẬP" . <br>
          3. Hệ thống hiển thị danh sách người dùng . <br>
          4. Người quản lý chọn người dùng cụ thể hoặc vai trò mà họ muốn phân quyền. <br>
          5. Hệ thống hiển thị các quyền truy cập và phân quyền tương ứng cho người dùng <br>
          6. Người quản lý tiến hành thay đổi quyền truy cập bằng cách chọn hoặc bỏ chọn các quyền truy cập tương ứng. <br>
          7. Sau khi hoàn thành phân quyền truy cập, người quản lý lưu lại các thay đổi. <br>
          8. Hệ thống cập nhật quyền truy cập cho người dùng hoặc vai trò đó và hiển thị thông báo thành công. <br> </p>
      </div>
      <div class="col-lg-6"> <img src="./image/hinh_19.jpg" alt=""></div>
    </div>
  </div>
  <div class="container-fluide" style="background-color: #f6fdc3; padding: 15px;">
    <div class="container">
      <h3>Gửi thông báo tự động đến các thành viên</h3>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6"> <img src="./image/hinh_20.jpg" alt=""></div>
        <div class="col-lg-6">
          <p style="font-size: 20px;">1. Người quản trị web gia phả đăng nhập vào hệ thống. <br>
            2. Người quản trị truy cập vào trang quản lý thông báo hoặc gửi thông báo tự động. <br>
            3. Người quản trị lựa chọn loại thông báo cần gửi (sự kiện, cập nhật, tin tức, vv.) và tạo nội dung thông báo. <br>
            4. Người quản trị chọn danh sách các thành viên muốn gửi thông báo. <br>
            5. Người quản trị xác nhận thông báo và gửi đi. <br>
            6. Hệ thống gửi thông báo tự động tới tất cả các thành viên được chọn. <br>
            7. Thành viên nhận thông báo qua email, tin nhắn trong ứng dụng, hoặc thông báo trên trang web gia phả. <br> </p>
        </div>

      </div>
    </div>
  </div>


  <div class="footer" style="text-align: center; padding-top: 15px;">
    <div class="container-fluide" style="background-color:  #ecde429e;">
      <div class="container">
        <h1 style="text-align: center;">Cam kết bảo mật thông tin</h1>

      </div>

      <div class="row">
        <div class="col-lg-4" style="text-align: center;">
          <i class="fa fa-lock" aria-hidden="true"></i>
          <b> Cam kết bảo mật <br></b>
          Phần mềm cao cấp với tính bảo mật cao, bảo vệ thông tin khách hàng an toàn
        </div>
        <div class="col-lg-4" style="text-align: center;">
          <i class="fa fa-user-o" aria-hidden="true"></i>
          <b> Không chia sẻ thông tin <br></b>
          Công ty chủ quan Webux.vn cam kết không sử dụng và không chia sẻ thông tin cho bên thứ 3
        </div>
        <div class="col-lg-4" style="text-align: center;">
          <i class="fa fa-cloud-upload" aria-hidden="true"></i>
          <b> Sao lưu dữ liệu <br></b>
          Dữ liệu được sao chép và lưu trữ để có thể phục hồi lại trong tình huống xấu nhất
        </div>
      </div>


      <div class="container-fluide" style="background-color:  #e0dddd;padding: 15px;">
        <div class="container">
          <h1 style="text-align: center;">Cam kết bảo hành vĩnh viễn</h1>

        </div>

        <div class="row">
          <div class="col-lg-4">
            <i class="fa fa-wrench" aria-hidden="true"></i>
            <b> Sửa chữa mọi lỗi trong 2h <br></b>
            Hệ thống quản trị viên sẽ sửa lỗi nhanh chóng khi nhận được thông tin từ khách
          </div>
          <div class="col-lg-4">
            <i class="fa fa-phone" aria-hidden="true"></i>

            <b>Hỗ trợ 24/7 <br></b>
            Cam kết hướng dẫn và hỗ trợ nhanh chóng, điện thoại tư vấn 24h
          </div>
          <div class="col-lg-4">
            <i class="fa fa-download" aria-hidden="true"></i>
            <b> Cập nhật phần mềm <br></b>
            Phần mềm sẽ được cập nhật thường xuyên để tăng thêm chức năng và bảo đảm an toàn thông tin cho khách hàng
          </div>
        </div>
      </div>


      <div class="container">
        <h1 style="text-align: center;">Thông tin và liên hệ</h1>

      </div>

      <div class="row">
        <div class="col-lg-4">
          <b> Sửa chữa mọi lỗi trong 2h <br></b>
          Địa chỉ: Tầng 6 tòa nhà MD Complex (Khối văn phòng) số 68, Nguyễn Cơ - Phường Cầu Diễn - Quận Nam Từ Liêm - Hà Nội.
        </div>
        <div class="col-lg-4">
          <b>Thông tin <br></b>
          - Ngân hàng: Vietcombank <br>
          - Tài khoản ngân hàng: Công ty TNHH Webux <br>
          - Số tài khảon: 0011004383334 <br>
          - Chi nhánh: Sở Giao Dịch <br>

        </div>
        <div class="col-lg-4">

          <b> Thông tin liên hệ <br></b>
          Hotline: 0966 130 168 <br>
          Zalo: 0966 130 168
        </div>
      </div>

    </div>
  </div>
  <!-- Chatbox Placeholder -->
  <!-- Your page content goes here -->

  <!-- Chatbox Icon -->
  <div class="chat-icon" id="chat-icon">
    <!-- <i class="fab fa-facebook-messenger fa-spin"></i> -->
    <!-- <i class="fab fa-teamspeak" style="color: #B197FC;"></i> -->
    <i class="fab fa-teamspeak fa-lg-spin" style="color: #B197FC;"></i>
  </div>

  <div class="chat-window" id="chat-window">
    <div class="chat-window-header">
      <h2 style="text-shadow: 2px 2px 5px rgb(29, 26, 26); color: rgb(225, 29, 29); animation: shake 0.5s ease-in-out 0s infinite alternate;">TanMa.com</h2>
      <button id="close-button">&times;</button>
    </div>
    <div class="chat-window-body" id="chat-window-body">
      <!-- Nội dung chat sẽ được thêm vào đây -->
    </div>
    <div class="chat-window-footer">
      <input type="text" id="window-message-input" placeholder="Nhập tin nhắn..." />
      <button id="window-send-button">Gửi</button>
    </div>
  </div>

  <script src="chatbot.js"></script>
  <script src="btnback.js"></script>
</body>

</html>