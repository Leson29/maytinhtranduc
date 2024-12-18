<?php
    session_start();
    ob_start();
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TRAN DUC COMPUTER</title>


    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    
    <!-- Custom CSS --> 
    <link rel="stylesheet" href="css/owl.carousel.css">
    
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script language="javascript" type="text/javascript" src="js/function1.js"></script>

    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- load database -->
    <!-- php xóa  -->
    
   
  </head>
  <body>
   
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                        
                            <li><a href="index.php?mod=user&act=about"><i class="fa fa-user"></i>Tài Khoản</a></li>
                            <li><a href="index.php?mod=user&act=aboutus"><i class="fa fa-user"></i>Về chúng tôi</a></li>
                            <?php
                            if(isset($_SESSION["lgUserID"])){
                            $chuoi1 = <<<EOD
                            <li><a href="index.php?mod=user&act=logout"><i class="fa fa-user"></i>Đăng xuất</a></li>

EOD;
                            echo $chuoi1;
                            if($_SESSION['lgGroupID']==1){
                                echo "<li><a href=\"admin.php\"><i class=\"fa fa-user\"></i>Admin</a></li>";
                            }
                        }
                        else{
                            $chuoi1 = <<<EOD
                            <li><a href="index.php?mod=user&act=login"><i class="fa fa-user"></i>Đăng Nhập</a></li>
                            <li><a href="index.php?mod=user&act=register"><i class="fa fa-user"></i>Đăng Ký</a></li>
EOD;
                            echo $chuoi1;
                        }

                        ?>
                        </ul>
                    </div>
                </div>
                 
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="index.php" style="color: #333; font-family: fantasy;"><b>TRAN DUC COMPUTER</b></a></h1>
                        
                    </div>
                </div>
                

                <!-- <?php
                   // include_once("Controller/Cart/Cart.php");
                ?> -->

            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Trang Chủ</a></li>
                        <li><a href="index.php?mod=products&act=allproducts" onclick="return isActive()">Sản Phẩm</a></li>
                        <li><a href="index.php?mod=products&act=detail">Thông Tin Sản Phẩm</a></li>
                        <li><a href="index.php?mod=cart&act=detail">Giỏ Hàng</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropbtn">Phân Loại</a>
                            <div class="dropdown-content">

                                <?php
                                    include_once("Controller/Category/Category.php");
                                ?>

                                   
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropbtn">Hãng sản xuất</a>
                            <div class="dropdown-content">

                                <?php
                                    include_once("Controller/Manufacturer/Manufacturer.php");
                                ?>
                            </div>
                        </li>
                      
                        
                    </ul>
<?php
                    include_once("Controller/Cart/Cart.php");
                ?> 
                </div>  
                
            </div>
        </div>
    </div> <!-- End mainmenu area -->