<?php
    session_start();
    // $page_name = basename($_SERVER['PHP_SELF']);

	require 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Check out</title>
  <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="fonts/awe/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/my_furniture.css">
  <link rel="stylesheet" type="text/css" href="css/product1.css"> 
   <meta http-equiv=Content-Type content="text/html; charset=utf-8"> 
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
    <!-- <div id="user"><img src="image/user.png" width="40" height="40"></div>
	<div id="detail"><a href="index.php">Sign in</a> | <a href="register.php">Sign up</a></div> -->

			</div><!-- end wrap-use -->


		<div id="wrap-logo"><center><a href="home.php"><img src="img/logo.png" width="140" height="130"></a></center></div>
		<div id="wrap-cart"><a href="cart.php"><i class="fa fa-shopping-cart"></i><div id="wrap-c" class="top"><?php if(isset($_SESSION['number_product'])){ echo $_SESSION['number_product'];}?></div></a>&nbsp;&nbsp;</div>
		</div><!-- end header -->

	<div id='NavStrip'>
  	<label for="menu-toggle"><i class="fa fa-bars"></i></label>
  	<input type="checkbox" id="menu-toggle"/>
		<ul id='nav' class=''>
 			<li><a href="#">Home</a></li>
        <li><a href="product.php"  class="current">Delivery</a></li>
        <li><a href="#">Booking</a></li>
        <li><a href="#">Promotion</a></li>
        <li><a href="#">Contact</a></li>
  		</ul>
	</div>
	<div></div>
	<div class="font-light">ขอบคุณที่ใช้บริการ</div>
<center><div id="linehome"><img src="image/line1.png"></div></center>
	<?php 
		require 'connect.php';
	$objConnect -> query("set names utf8");

	$id_product = $_POST["id_product"];
	$img_product = $_POST["img_product"];
	$name_product= $_POST['name_product'];
	$num_cart = $_POST['num_cart'];
	$price_product = $_POST['price_product'];
	$totalPrice = $_POST['totalPrice'];
	$priceAll=0;
	$date_order = time('now');
	$id_member = $_SESSION['id_member'];


	 $sql ="INSERT INTO order_menu (id_order,date_order,id_member,price_order) VALUES ('','{$date_order}','{$id_member}','')";
     $query = mysqli_query($objConnect,$sql);

     if ($query) {
     	//echo "success";
     	$lastID = mysqli_insert_id($objConnect);

     	//echo $lastID;
     }

	foreach ($id_product as $key => $value) {

		$id_product[$key]." : "."<br/>";
		$img_product[$key]." : "."<br/>";
		$name_product[$key]." : "."<br/>";
		$num_cart[$key]." : "."<br/>";
		$price_product[$key]." : "."<br/>";
		$totalPrice = $price_product[$key]*$num_cart[$key];
		$totalPrice."<br/>";


		$priceAll += $totalPrice;

		$sql2 ="INSERT INTO order_detail (id,id_product,id_member,id_order,amount_order,totalPrice) VALUES ('','{$id_product[$key]}','{$id_member}','{$lastID}','{$num_cart[$key]}','{$totalPrice}')";

     $query2 = mysqli_query($objConnect,$sql2);

     if ($query2) {
     	
     }

	}
		$priceAll;
	 ?>


	<?php foreach ($id_product as $key => $value)  {

	   ?><div id="check-wrap">
	 	<div id="check-1"><span class="or"><?php echo $name_product[$key] ?></span><br>
	 	รายการอาหาร :   <?php echo $name_product[$key] ?><br>
	 	ราคา : <?php echo number_format ($price_product[$key]) ?> ฿ <br>
	 	จำนวน :<?php echo $num_cart[$key] ?> <br>
	 	<?php $totalPrice = $price_product[$key]*$num_cart[$key]; ?>
	 	Total : <?php echo number_format($totalPrice) ?> ฿
	 	</div>


	 	<div id="check-img"><img src="img/<?php echo $img_product[$key]?>"></div>
	 </div>
	  <?php
          }
       
 ?>
<span class="to1">Total Price : <?php echo number_format($priceAll); ?> บาท</span>
	
	

   <div id="butt1">
     
     	<center><a href="product.php"><button id="blue-btn">สั่งอาหาร</button></a></center>

     </div>

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
</div><!-- end wrapper -->
</body>
</html>