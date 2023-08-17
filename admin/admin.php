<?php
		session_start();
		ob_start();

		include "../model/connect.php";
		include "../model/sanpham.php";
		include "../model/user.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Shoe BK</title>

	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="../assets/imgs/logo1.png"/>

	<!-- Import lib -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/fontawesome-free/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<!-- End import lib -->

	<link rel="stylesheet" type="text/css" href="../css/admin.css">
	<link rel="stylesheet" href="../css/update.css">
</head>
<body class="overlay-scrollbar">
	<!-- navbar -->
	<div class="navbar">
		<!-- nav left -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link">
					<i class="fas fa-bars" onclick="collapseSidebar()"></i>
				</a>
			</li>
			<li class="nav-item">
				<a href="../pages/product.php">
					<img src="../assets/imgs/logo1.png" alt="Shoe BK" class="logo logo-light">
					<img src="../assets/imgs/logo1.png" alt="Shoe BK" class="logo logo-dark">
				</a>
				
			</li>
		</ul>
		<!-- end nav left -->
		<!-- form -->
		<form class="navbar-search">
			<input type="text" name="Search" class="navbar-search-input" placeholder="What you looking for...">
			<i class="fas fa-search"></i>
		</form>
		<!-- end form -->
		<!-- nav right -->
		<ul class="navbar-nav nav-right">
			<li class="nav-item mode">
				<a class="nav-link" href="#" onclick="switchTheme()">
					<i class="fas fa-moon dark-icon"></i>
					<i class="fas fa-sun light-icon"></i>
				</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link">
					<i class="fas fa-bell dropdown-toggle" data-toggle="notification-menu"></i>
					<span class="navbar-badge">15</span>
				</a>
				<ul id="notification-menu" class="dropdown-menu notification-menu">
					<div class="dropdown-menu-header">
						<span>
							Notifications
						</span>
					</div>
					<div class="dropdown-menu-content overlay-scrollbar scrollbar-hover">
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-gift"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-tasks"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-gift"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-tasks"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-gift"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-tasks"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-gift"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-tasks"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-gift"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-tasks"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-gift"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-tasks"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
					</div>
					<div class="dropdown-menu-footer">
						<span>
							View all notifications
						</span>
					</div>
				</ul>
			</li>
			<li class="nav-item avt-wrapper">
				<div class="avt dropdown">
					<img src="../assets/imgs/hinh-avata-chibi-de-thuong-cute-10.jpg" alt="User image" class="dropdown-toggle" data-toggle="user-menu">
					<ul id="user-menu" class="dropdown-menu" >
						<li  class="dropdown-menu-item">
							<a class="dropdown-menu-link" >
								<div>
									<i class="fas fa-user-tie"></i>
								</div>
								<span>Profile</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link" >
								<div>
									<i class="fas fa-cog"></i>
								</div>
								<span>Settings</span>
							</a>
						</li>
						<li  class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link" >
								<div>
									<i class="far fa-credit-card"></i>
								</div>
								<span>Payments</span>
							</a>
						</li>
						<li  class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link" >
								<div>
									<i class="fas fa-spinner"></i>
								</div>
								<span>Projects</span>
							</a>
						</li>
						<li  class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link" >
								<div>
									<i class="fas fa-sign-out-alt"></i>
								</div>
								<span>Logout</span>
							</a>
						</li>
					</ul>
				</div>
			</li>
		</ul>
		<!-- end nav right -->
	</div>
	<!-- end navbar -->
	<!-- sidebar -->
	<div class="sidebar">
		<ul class="sidebar-nav">
			<li class="sidebar-nav-item">
				<a href="../admin/admin.php?act=infor" class="sidebar-nav-link"  onclick="setActiveLink(event)">
					<div>
						<i class="fas fa-user"></i>
					</div>
					<span>
						THÔNG TIN
					</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="../admin/admin.php?act=listProduct" class="sidebar-nav-link" onclick="setActiveLink(event)">
					<div>
						<i class="fas fa-th"></i>
					</div>
					<span>DS SẢN PHẨM</span>
				</a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="../admin/admin.php?act=addProduct" class="sidebar-nav-link" onclick="setActiveLink(event)">
					<div>
						<i class="fas fa-cart-plus" ></i>
					</div>
					<span>THÊM SP</span>
				</a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="../admin/admin.php?act=updateProduct" class="sidebar-nav-link" onclick="setActiveLink(event)">
					<div>
						<i class="fas fa-pen-square"></i>
					</div>
					<span>CẬP NHẬT SP</span>
				</a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="../admin/admin.php?act=addCTV" class="sidebar-nav-link" onclick="setActiveLink(event)">
					<div>
						<i class="fas fa-user-plus"></i>
					</div>
					<span>THÊM CTV</span>
				</a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="../admin/admin.php?act=signout" class="sidebar-nav-link" onclick="setActiveLink(event)">
					<div>
						<i class="fas fa-sign-out-alt"></i>
					</div>
					<span>Sign out</span>
				</a>
			</li>
		</ul>
	</div>
	<!-- end sidebar -->
	<!-- main content -->
	<div class="wrapper">
		<?php 
		if(isset($_GET['act'])){
			switch($_GET['act']){
				case 'infor':
					include "../view/infor.php";
					break;
				case 'listProduct':
					$kq = getAll_sp();
					include "../view/listProduct.php";
					break; 
				case 'addProduct':
					include "../view/addProduct.php";
					break;
				case 'addsp':
					if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
						$tensp = $_POST['tensp'];
						$gia = $_POST['gia'];
						$soluong = $_POST['soluong'];
						$hinh = $_POST['hinh'];
						addsp($tensp, $gia,$soluong,$hinh);
					}

					$kq = getAll_sp();
					include "../view/listProduct.php";
					break;
				case 'delsp':
					if(isset($_GET['id'])){
						$id=$_GET['id'];
						deleteSP($id);
					}
					$kq=getAll_sp();
					include "../view/listProduct.php";
					break;
				case 'editsp':
					if(isset($_GET['id'])){
						$id=$_GET['id'];
						$kqonesp = getOnesp($id);

						$kq = getAll_sp();

						include "../view/updateProduct.php";

					}
					if(isset($_POST['id'])){
						$id=$_POST['id'];
						$tensp=$_POST['tensp'];
						$gia = $_POST['gia'];
						$soluong = $_POST['soluong'];
						$hinh = $_POST['hinh'];
						updatesp($id,$tensp,$gia,$soluong,$hinh);

						$kq=getAll_sp();
						include "../view/listProduct.php";
					}
					
					break;
				case 'addCTV':
					include "../view/addCTV.php";
					break;
				case 'themctv':
					if ((isset($_POST['themctv'])) && ($_POST['themctv'])) {
						$user = $_POST['user'];
						$pass = $_POST['pass'];
						$name = $_POST['name'];
						$phone = $_POST['phone'];
						$email = $_POST['email'];
						$role = $_POST['role'];
						addUser($user,$pass,$name,$phone,$email,$role);
						
						include "../view/addCTV.php";
					}
					break;
				case 'signout':
					unset($_SESSION['role']);
					header('location: ../pages/login.php');
					break;
				default:
					header('location: ../admin/admin.php');
					break;
			}
		}
		// else{
		// 	header('location: ../admin/admin.php?act=infor');
		// }
		?>
	</div>
	<!-- end main content -->
	<!-- import script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
	<script src="../js/admin.js"></script>
	<!-- end import script -->
</body>
</html>