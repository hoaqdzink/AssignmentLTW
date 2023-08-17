<?php

    session_start();
    ob_start();

    include "../model/connect.php";
    include "../model/sanpham.php";
?>

<!DOCTYPE html>
<html lang="en" ng>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignments</title>
    <link rel="stylesheet" href="../css/product.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <link rel="shortcut icon" type="image/png" href="../assets/imgs/logo1.png" />

</head>

<body>
    <header>
        <div class="menuTop">
            <div class="logo">
                <img src="../assets/imgs/logo.png" alt="logo">
            </div>
            <ul class="menu">
                <li>
                    <a href="../index.html">Trang chủ</a>
                </li>
                <li>
                    <a href="/pages/product.php">Sản phẩm</a>
                </li>
                <li>
                    <a href="#contact">Liên hệ</a>
                </li>
            </ul>
            <div class="toggleMenu" onclick="document.querySelector('.menu').classList.toggle('active')">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="list">

            <?php
            // var_dump($kq);
            $kq = getAll_sp();
            
            if (isset($kq) && (count($kq) > 0)) {
                foreach ($kq as $sp) {
                    echo '
                    <div class="item">
                        <div class="img">
                            <img src='.$sp['hinh'].'>
                        </div>
                        <div class="content">
                            <div class="title">' . $sp['tensp'] . '</div>
                            <div class="des">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Repellendus, minus.
                            </div>
                            <div class="price">' . $sp['gia'] . ' VNĐ</div>
                            <button class="add">Add to cart</button>
                        </div>
                    </div>
                    ';
                }
            }
            ?>


        </div>
        <ul class="listPage">

        </ul>
    </div>


    <footer>
        <div class="content">
            <div class="itemFooter">
                <ul>
                    <li>VỀ BK SHOES</li>
                    <li>Bước tiến phát triển</li>
                    <li>Hoạt động</li>
                    <li>Câu chuyện về BK Shoes</li>
                    <li>Về BK Shoes</li>
                </ul>
            </div>
            <div class="itemFooter">
                <ul>
                    <li>THÔNG TIN</li>
                    <li>Trang thái đơn hàng</li>
                    <li>Hình thức giao hàng</li>
                    <li>Chính sách đổi trả</li>
                    <li>Hình thức thanh toán</li>
                </ul>
            </div>

            <div class="itemFooter">
                <ul>
                    <li>TRỢ GIÚP</li>
                    <li>Tuyển dụng</li>
                    <li>Hệ thống của hàng</li>
                    <li>Liên hệ hợp tác</li>
                    <li>Q&A</li>
                </ul>
            </div>
            <div class="itemFooter" id="contact">
                <h3>Contact</h3>
                <textarea rows="10" placeholder="Message"></textarea>
                <input type="email" placeholder="Email">
                <button>Send</button>
            </div>
        </div>
    </footer>

    <script src="../js/Pagination.js"></script>
</body>

</html>