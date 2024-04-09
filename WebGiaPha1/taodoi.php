<!-- taodoi.php -->
<?php
// Include tập tin db_connect.php để có kết nối đến cơ sở dữ liệu
include 'db_connect.php';

// Kiểm tra xem có tham số 'generation' được truyền từ trang trước không
if (isset($_GET['generation'])) {
    // Lấy giá trị của tham số 'generation'
    $generation = $_GET['generation'];

    // Truy vấn để lấy dữ liệu của đời tương ứng từ bảng GenerationData và generations
    $sql = "SELECT Name_Generation_Of_Member 
            FROM generation_of_member 
            WHERE Name_Generation_Of_Member = '$generation'";
    $result = mysqli_query($conn, $sql);

    // Kiểm tra xem có dữ liệu trả về hay không
    if (mysqli_num_rows($result) > 0) {
        // Duyệt qua từng hàng dữ liệu và hiển thị
        while ($row = mysqli_fetch_assoc($result)) {
          
        }
    } else {
        // echo " Không có dữ liệu cho đời '$generation'.";
    }
} else {
    echo " Không có thông tin đời nào được chọn.";
}
// Thực hiện truy vấn SQL để lấy dữ liệu từ bảng relationship
$sql = "SELECT * FROM relationship";
$result = mysqli_query($conn, $sql);

// Kiểm tra xem có dữ liệu được trả về không
if (mysqli_num_rows($result) > 0) {
    // Duyệt qua từng dòng dữ liệu và hiển thị
    while ($row = mysqli_fetch_assoc($result)) {
        // echo "ID: " . $row["Id_Relationship"] . " - Name_Type_RelationShip: " . $row["Name_Type_RelationShip"] . " - FromGenerationID: " . $row["FromGenerationID"] . " - ToGenerationID: " . $row["ToGenerationID"] . "<br>";
    }
} else {
    echo "Không có dữ liệu trong bảng relationship";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin đời</title>
    <link rel="stylesheet" href="hienthitaodoi.css">
    <link rel="stylesheet" href="Caygiapha.css">
    <link href="./css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="btnback.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <!-- quay ve -->
    <button id="backButton" onclick="goBack()">
        <i class="fas fa-arrow-left"></i>
    </button>


    <!-- <h1>Thông tin đời</h1> -->



    <!-- Container chứa khung hình -->
    <div class="container-fluide">
        <!-- Container chứa thanh menu -->
        <div class="rounded-box">
            <div class="thanhdecu">
                <!-- Hiển thị dữ liệu từ bảng 'generations' -->
                <?php
                if (isset($_GET['generation'])) {
                    $generation = $_GET['generation'];
                    echo "<h1>Thông tin đời <span style='color: red;'>$generation</span></h1>";
                } else {
                    echo "Không có thông tin đời nào được chọn.";
                }
                ?>
            </div>
        </div>
        <!-- Container chứa form thêm con -->
        <!-- <div id="addChildFormContainer" class="center-container"></div> -->
        <!-- Container chứa dữ liệu đời -->
     <!-- Container chứa dữ liệu đời -->
<div class="container-fluid" style="background-color: #ecde429e;">
    <!-- Container con -->
    <div class="container">
        <!-- Container con -->
        <div class="row justify-content-center">
            <!-- Container con -->
            <div class="col-md-12">
                <!-- Container con -->
                <div class="rectangle-frame">
                    <!-- Container con -->
                    <div class="generation-grid">
                        <!-- Hiển thị dữ liệu từ bảng 'generations' -->
                        <?php
                        if (isset($_GET['generation'])) {
                            $generation = $_GET['generation'];
                            $sql = "SELECT Name_Generation_Of_Member 
                                FROM generation_of_member 
                                INNER JOIN generations 
                                ON generation_of_member.GenerationID = generations.id
                                WHERE generations.name_member = '$generation'";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<div class='generation-node'>";
                                    echo "<h3 class='generation-name' style='padding-bottom: 25px; margin'>" . $row['Name_Generation_Of_Member'] . "</h3>";
                                    echo "<div class='add-button'>";
                                    echo "<a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' style='margin-left:250px'>";
                                    echo "<i style='font-size:24px' class='fa'>&#xf039;</i>";
                                    echo "</a>";
                                    echo "<div class='dropdown-menu' aria-labelledby='navbarDropdown'>";
                                    
                                    echo '<button class="btn btn-primary view-more-button" onclick="redirectToXemTieuSu(\'' . $row['Name_Generation_Of_Member'] . '\')">Xem thêm</button>';

                                    echo "<a class='dropdown-item' id='addChildBtn'><i style='font-size:24px' class='fa'>&#xf067;</i> Thêm con</a>";
                                    echo "<div class='dropdown-divider'></div>";
                                   
                                    echo "</div>";
                                    echo "</div>";
                                    echo "</div>";
                                }
                            } else {
                                echo " Không có dữ liệu cho đời '$generation'.";
                            }
                        } else {
                            echo " Không có thông tin đời nào được chọn.";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- Footer -->
        <footer>
            <!-- Container chứa footer -->
            <div class="container">
                <!-- Container chứa thông tin bản quyền và mạng xã hội -->
                <p class="copyright">Copyright &copy; 2024 Ma Nguyễn Nhật Tân</p>
                <!-- Container chứa icon mạng xã hội -->
                <ul class="social-media">
                    <li>
                        <a href="https://www.facebook.com/profile.php?id=100095393522926">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>

<!-- Container cho form thêm con -->
<div class="form-container" id="addChildFormContainer" style="display: none;">
    <!-- Form thêm con -->
    <form id="addChildForm">
        <h2>Thêm con</h2>
        <input type="text" id="childName" placeholder="Nhập tên con...">
        <button type="submit" id="saveButton">Lưu</button>

    </form>
</div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            fetchAndDisplayData();
        });

        // Lấy dữ liệu từ server và hiển thị trong rectangle-frame
        function fetchAndDisplayData() {
            fetch('lay_du_lieu_caygiapha.php')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Có lỗi xảy ra khi lấy dữ liệu.');
                    }
                    return response.json(); // Trả về dữ liệu JSON từ PHP
                })
                .then(data => {
                    const rectangleFrame = document.querySelector('.rectangle-frame');

                    // Xóa nội dung cũ trong rectangle-frame trước khi thêm dữ liệu mới
                    rectangleFrame.innerHTML = '';

                    // Duyệt qua mảng dữ liệu và hiển thị name_member của mỗi phần tử
                    data.forEach(generation => {
                        const generationName = generation.name_member;
                        const generationNode = document.createElement('div');
                        generationNode.classList.add('generation-node');
                        generationNode.innerHTML = `
                    <div class="generation-info">
                        <h3 class="generation-name">${generationName}</h3>
                    </div>
                `;
                        rectangleFrame.appendChild(generationNode);
                    });
                })
                .catch(error => {
                    console.error('Lỗi:', error);
                });
        }


        // icon
        var container1 = document.getElementById('row1');
        var container2 = document.getElementById('row2');
        var addChildBtn = document.getElementById('addChildBtn');
        var addPartnerBtn = document.getElementById('addPartnerBtn');
        var squareCount = 1;

        // them con 
        document.getElementById('addChildBtn').addEventListener('click', function() {
            // Tạo một form để nhập thông tin con
            var formHTML = `
        <form id="addChildForm">
            <input type="text" id="childName" placeholder="Nhập tên con...">
            <button type="submit" id="saveButton">Lưu</button>
        </form>
    `;
        });
        

  // Hàm để gửi yêu cầu AJAX để lưu tên con và ẩn form sau khi lưu thành công
function saveChild() {
    const childName = document.getElementById('childName').value;

    // Tạo yêu cầu AJAX
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'save_child.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    // Xử lý phản hồi từ server
    xhr.onload = function() {
        if (xhr.status >= 200 && xhr.status < 300) {
            // Phản hồi thành công
            const response = JSON.parse(xhr.responseText);
            if (response.success) {
                // Lưu thành công, bạn có thể thực hiện các hành động khác ở đây nếu cần
                console.log('Tên con đã được lưu thành công.');
                // Ẩn form sau khi lưu thành công
                document.getElementById('addChildFormContainer').style.display = 'none';
                // Xóa dữ liệu đã nhập
                document.getElementById('childName').value = '';
            } else {
                // Lưu thất bại, xử lý lỗi nếu cần
                console.error('Đã xảy ra lỗi khi lưu tên con.');
            }
        } else {
            // Xử lý lỗi từ server nếu có
            console.error('Đã xảy ra lỗi từ server.');
        }
    };

    // Gửi yêu cầu với dữ liệu là tên con
    xhr.send('childName=' + encodeURIComponent(childName));
}

document.addEventListener('DOMContentLoaded', function() {
    // Bắt sự kiện khi người dùng nhấn Enter trong ô nhập liệu tên con
    document.getElementById('childName').addEventListener('keypress', function(event) {
        if (event.key === 'Enter') {
            event.preventDefault(); // Ngăn chặn hành động mặc định của phím Enter (submit form)
            saveChild(); // Gọi hàm lưu tên con
        }
    });

    // Bắt sự kiện khi người dùng nhấn nút "Lưu"
    document.getElementById('saveButton').addEventListener('click', function(event) {
        event.preventDefault(); // Ngăn chặn hành động mặc định của nút "Lưu"
        saveChild(); // Gọi hàm lưu tên con
    });

    // Thêm sự kiện click cho nút "Thêm con" để hiển thị form
    document.getElementById('addChildBtn').addEventListener('click', function(event) {
        event.stopPropagation(); // Ngăn chặn sự kiện click lan rộng đến phần tử cha
        document.getElementById('addChildFormContainer').style.display = 'block';
    });

    // Thêm sự kiện click cho phần tử document để ẩn form khi click ra ngoài form
    document.addEventListener('click', function(event) {
        document.getElementById('addChildFormContainer').style.display = 'none';
    });

    // Thêm sự kiện click cho form container để ngăn chặn việc ẩn form khi click vào form
    document.getElementById('addChildFormContainer').addEventListener('click', function(event) {
        event.stopPropagation(); // Ngăn chặn sự kiện click lan rộng đến phần tử document
    });
});

function redirectToXemTieuSu(memberID) {
    // Tạo đường link đến trang xemtieusu.php với tham số 'memberID' được truyền vào
    var url = 'xemtieusu.php' ;
    // Chuyển hướng người dùng đến trang xemtieusu.php

    window.location.href = url;
}

    </script>

    <script src="chatbot.js"></script>
    <script src="btnback.js"></script>
</body>

</html>