<?php
    session_start();
    // $page_name = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html>
<head>
  <title>- Menu Prachak -</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/hoverimg.css">
  <link rel="stylesheet" type="text/css" href="fonts/awe/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/product.css"> 
  <link rel="stylesheet" type="text/css" href="css/my_furniture.css"> 
</head>

<body>
  <div id="wrapper1">
    <div id="header">
      <div id="wrap-user">
       <?php
    if (isset($_SESSION['name_member'])) {
                //echo $_SESSION['name_member']." | ";
                //echo "<a href='logout.php'>logout</a>";
  echo '<div id="user"><img src="image/user.png" width="60" height="60"></div>';
  echo '<div id="detail"><a href="index.php">'.$_SESSION['name_member'].'</a> | <a href="logout.php">logout</a></div>';
    }else{
  echo '<div id="user"><img src="image/user.png" width="60" height="60"></div>';
  echo '<div id="detail"><a href="index.php">Sign in</a> | <a href="register.php">Sign up</a></div>';
    }
?>
      </div>
      <!-- end wrap-use -->
      <div id="wrap-logo">
        <center><a href="home.php"><img src="img/logo.png" width="140" height="160"></a></center>
      </div>
<div id="wrap-cart"><a href="cart.php"><i class="fa fa-shopping-cart"></i><div id="wrap-c"><?php if(isset($_SESSION['number_product'])){ echo $_SESSION['number_product'];}?></div></a>&nbsp;&nbsp;</div>
    </div>
    <!-- end header -->
    <div id='NavStrip'> <label for="menu-toggle"><i class="fa fa-bars"></i></label> <input
        type="checkbox" id="menu-toggle" />
      <ul id='nav' class=''>
        <li><a href="#">Home</a></li>
        <li class="current"><a href="product.php">Delivery</a></li>
        <li><a href="product.php">Booking</a></li>
        <li><a href="#">Promotion</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
    <section class="bg-blue"> 
      <article class="slideshow">        
        <div class="slideshow-wrapper">
          <ul class="slides">
              <li class="slide-image"><img src="img/sd3.jpg" width="1024"/></li>
              <li class="slide-image"><img src="img/sd2.jpg" width="1024"/></li>
              <li class="slide-image"><img src="img/sd1.jpg" width="1024"/></li>
              <li class="slide-image"><img src="img/sd1.jpg" width="1024"/></li>
          </ul>
        </div><!-- slideshow-wrapper -->
      </article>
  </section>

  <div id="nav1">
    <center><div id="menu-food" class="line"><a href="product.php"><img src="img/nav1.png" width="60"><br>เป็ดย่างและอื่นๆ</a></div></center>
    <center><div id="menu-food"><a href="rice.php"><img src="img/nav2.png" width="60"><br>ข้าวหน้าต่างๆ</a></div></center>
    <center><div id="menu-food"><a href="noodle.php"><img src="img/nav3.png" width="60" height="52"><br>บะหมี่ เกี๊ยว</a></div></center>
    <center><div id="menu-food"><a href="food.php"><img src="img/nav4.png" width="60"><br>อาหารตามสั่ง</a></div></center>
    <center><div id="menu-food"><a href="tim.php"><img src="img/nav5.png" width="50" height="52"><br>ติ่มซำ</a></div></center>
  </div><!-- end nav1 -->

  <div class="font-light1">Menu</div>
     <center><div id="linehome1" class="clear"><img src="image/line1.png"></div></center>
<?php 
  require'connect.php';
  $objConnect -> query("set names utf8");

  $sql ="SELECT * FROM product WHERE product_type = '1'";
  $query = mysqli_query($objConnect,$sql);
 ?>
<div id="product">
    <div id="wrap">
      <div id="columns" class="columns_4">
      <?php 
          while ($rows=mysqli_fetch_array($query)) {
            ?>
          <figure> <img src="img/<?php echo $rows['img_product']; ?>">
          <figcaption><?php echo $rows['name_product']; ?></figcaption>
         <span class="price"><?php echo number_format($rows['price_product']); ?> ฿</span>
           <form action="cart_add.php" method="POST">
                        
              <input type="hidden" name="product_fur" value="<?php echo $rows['id_product'];?>"><br>
              <center><input type="submit" class="btn-product" id="cart-bg" value="Add to cart"></center>
        
           </form>
        </figure>
      <?php
          }
       ?>
       </div>
        </div>
        </div>
        <!-- end product -->
        <div id="footer">
    <div id="contact"><i class="fa fa-home" id="text-con"><span class="font1">Visit Us</span></i><br>
    <span class="font-foot">1415 ถ.เจริญกรุง แขวงสีลม <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เขตบางรัก กทม. 10500</span>
    </div>

    <div id="contact"><i class="fa fa-phone" id="text-con"><span class="font1">Call Us</span></i><br>
    <span class="font-foot">02-234-3755<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;083-910-1444 </span><br><br>
    <center><span class="copy">Copyright C. Suppalak 13560285 <br> This website is for educational purposes only.</span></center>
    </div>
    
    <div id="contact"><i class="fa fa-envelope" id="text-con"><span class="font1">Contact Us</span></i><br>
    <span class="font-foot">www.prachakrestaurant.com</span>
    </div>
  </div>
        </div>
        <!-- end wrapper1 -->
      
          
  
</body>

</html>