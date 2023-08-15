<?php
// quản lý tài khoản
    session_start();
    ob_start();
    include "../model/connect.php";
    include "../model/user.php";
    if ((isset($_POST['submit'])) && ($_POST['submit'])) {
        $user = $_POST['Username'];
        $pass = $_POST['Password'];
        $role = checkuser($user, $pass);

        $_SESSION['role'] = $role;

        if ($role == 1) {
            header('location: ../pages/admin.html');
        } else {
            $txt_erro = "User hoặc Pass không tồn tại";
        }
    }
    if ((isset($_POST['submit'])) && ($_POST['submit'])) {
        $user = $_POST['Username'];
        $pass = $_POST['Password'];
        $role = checkuser($user, $pass);

        $_SESSION['role'] = $role;

        if ($role == 2) {
            header('location: ../index.html');
        } else {
            $txt_erro = "User hoặc Pass không tồn tại";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Shoe BK</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="Glassy Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
    <script type="application/x-javascript">
        addEventListener("load", function(){
            setTimeout(hideURLbar, 0); 
        }, false);
            function hideURLbar(){
                window.scrollTo(0,1); 
            } 
    </script>
    <!-- Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Font-Awesome-Icons-CSS -->
    <link rel="stylesheet" href="../css/login.css" type="text/css" media="all" /> <!-- Style-CSS -->
    <!-- //css files -->
    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700" rel="stylesheet">
    <!-- //web-fonts -->

    <link rel="shortcut icon" type="image/png" href="../assets/imgs/logo1.png" />
</head>

<body>
    <a href="../index.html" class="hef_logo">
        <img src="../assets/imgs/logo.png" alt="Logo">
    </a>
    <!--header-->
    <div class="header-w3l">
        <h1>Shoe BK Login</h1>
    </div>
    <!--//header-->
    <!--main-->
    <div class="main-w3layouts-agileinfo">
        <!--form-stars-here-->
        <div class="wthree-form">
            <h2>Login</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <?php
                if (isset($txt_erro) && ($txt_erro != "")) {
                    echo "<font color='red'>" . $txt_erro . "</font>";
                }
                ?>
                <div class="form-sub-w3">
                    <input type="text" name="Username" placeholder="Username " required="" />
                    <div class="icon-w3">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="form-sub-w3">
                    <input type="password" name="Password" placeholder="Password" required="" />
                    <div class="icon-w3">
                        <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                    </div>
                </div>
                <label class="anim">
                    <input type="checkbox" class="checkbox">
                    <span>Remember Me</span>
                    <a href="#">Forgot Password</a>
                </label>
                <div class="clear"></div>
                <div class="submit-agileits">
                    <input type="submit" name="submit" value="Login">
                </div>
            </form>

        </div>
        <!--//form-ends-here-->

    </div>
    <!--//main-->
</body>

</html>