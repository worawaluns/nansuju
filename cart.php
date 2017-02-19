<?php
    session_start();
    // $page_name = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
  <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="fonts/awe/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/my_furniture.css">
   <meta http-equiv=Content-Type content="text/html; charset=utf-8"> 
   <link rel="stylesheet" type="text/css" href="css/product.css">
</head>
<body>
	<div id="wrapper1">
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

<?php 
	require'connect.php';
  $objConnect -> query("set names utf8");

 // $product_fur_id = $_POST['product_fur'];

// if (isset($_POST['product_fur'])) {

//  	$id_product = $_POST['product_fur'];
//  	$_SESSION['cart'][] = array(
//     'p_id'=> $product_fur_id,
//     );
  
// }

  //$_SESSION['number_product'] = count($_SESSION['cart']);

 


  
 ?>
    <!-- <div id="user"><img src="image/user.png" width="40" height="40"></div>
	<div id="detail"><a href="index.php">Sign in</a> | <a href="register.php">Sign up</a></div> -->

			</div><!-- end wrap-use -->


	<div id="wrap-logo"> <center><a href="home.php"><img src="img/logo.png" width="140" height="160"></a></center></div>
	<div id="wrap-cart"><a href="cart.php"><i class="fa fa-shopping-cart"></i><div id="wrap-c"  class="top"><?php echo $_SESSION['number_product']; ?></div></a>&nbsp;&nbsp;</div>
		</div><!-- end header -->

	<div id='NavStrip'>
  	<label for="menu-toggle"><i class="fa fa-bars"></i></label>
  	<input type="checkbox" id="menu-toggle"/>
		<ul id='nav' class=''>
 			 <li><a href="#">Home</a></li>
        <li class="current"><a href="product.php">Delivery</a></li>
        <li><a href="product.php">Booking</a></li>
        <li><a href="#">Promotion</a></li>
        <li><a href="#">Contact</a></li>
  		</ul>
	</div>
			<div class="font-light">ออร์เดอร์ของคุณ</div>
     <center><div id="linehome"><img src="image/line1.png"></div></center>



     <?php 
     if ($_SESSION['number_product']!=0) {
       $i=1;
     
     foreach ($_SESSION['cart'] as $key => $product) {
       foreach ($product as $key => $id_product) {
        


       $sql ="SELECT * FROM product WHERE id_product = '$id_product'";
       $query = mysqli_query($objConnect,$sql);
       
          while ($rows=mysqli_fetch_array($query)) {

            ?>

     <script type="text/javascript">
    //  function calPrice<?php echo $i; ?>() {
    //    var quantity = document.getElementById('num-cart-<?php echo $i ?>').value;
    //    var priceProduct = document.getElementById('priceProduct-<?php echo $i ?>').value;

    //    var totalPrice = quantity*priceProduct;

    //    document.getElementById('totalPrice-<?php echo $i ?>').innerHTML = totalPrice;       
       
    //  }

    //  </script>
     <form action="checkout.php" method="POST">
    <div id="cart">
    <input type="hidden" name="id_product[]" value="<?php echo $rows['id_product']; ?>">
    <input type="hidden" name="name_product[]" value="<?php echo $rows['name_product']; ?>">
    <input type="hidden" name="img_product[]" value="<?php echo $rows['img_product']; ?>">
    <input type="hidden" name="detail_product[]" value="<?php echo $rows['detail_product']; ?>">
    
    
     	<div id="cart-img"><img src="img/<?php echo $rows['img_product']; ?>"></div>
     	<div id="name_pro"><h2><?php echo $rows['name_product']; ?></h2><br>
     		<input type="number" step="1" value="1" id="num-cart-<?php echo $i ?>" class="num-cart"name="num_cart[]" min="1" onkeyup="calPrice<?php echo $i; ?>()"> x <input name="price_product[]" id="priceProduct-<?php echo $i ?>" type="hidden" value="<?php echo $rows['price_product']; ?>"><?php echo number_format($rows['price_product']); ?></span> 
     	</div>

     	<div id="price"><input type="hidden" name="totalPrice[]" value=""><h1 id="totalPrice-<?php echo $i ?>"></h1><!-- <button class="btn-heart"><i class="fa fa-times"></i></button> --> </div>
   </div>

     

     <script type="text/javascript">
          
        
     function resultPrice<?php echo $i; ?>() {
      var x = document.getElementById('resultPrice').value;
      var totalPrice = document.getElementById('totalPrice-<?php echo $i ?>').value;
      var total = +x + +totalPrice;

      document.getElementById('resultPrice-text').innerHTML = total;
      document.getElementById('resultPrice').value = total;

     }
      
     </script>
     <?php $i++; ?>
            
            <?php 
            }//end while


          }//end foreach
       }//end foreach
     }//end if
      ?>

  

     
 
   
    <div id="but">
   
     	<div id="but2"><a href="checkout.php"><button id="blue-btn">ยืนยันการซื้อ</button></a></div>

     </div>
</form>
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