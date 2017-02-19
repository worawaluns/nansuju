<?php
    session_start();
    // $page_name = basename($_SERVER['PHP_SELF']);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home | MY FURNITURE</title>
  <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="fonts/awe/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/product.css"> 
    <link rel="stylesheet" type="text/css" href="css/my_furniture.css">
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
    <!-- <div id="user"><img src="image/user.png" width="40" height="40"></div>
	<div id="detail"><a href="index.php">Sign in</a> | <a href="register.php">Sign up</a></div> -->

			</div><!-- end wrap-use -->


			<div id="wrap-logo"><center><a href="home.php"><img src="image/logo.png" width="250" height="110"></a></center></div>
			<div id="wrap-cart"><a href="cart.php"><i class="fa fa-shopping-cart"></i><div id="wrap-c" class="top"><?php if(isset($_SESSION['number_product'])){ echo $_SESSION['number_product'];}?></div></a>&nbsp;&nbsp;</div>
		</div><!-- end header -->

	<div id='NavStrip'>
  	<label for="menu-toggle"><i class="fa fa-bars"></i></label>
  	<input type="checkbox" id="menu-toggle"/>
		<ul id='nav' class=''>
 			<li><a href="Promotion.php">Promotion</a></li>
 			<li><a href="interior.php">Interior</a></li>
  			<li><a href="product.php">Product</a></li>
  			<li><a href="style.php">Style</a></li>
  			<li><a href="contact.php">Contact</a></li>
  		</ul>
	</div>
		  
  <section class="bg-blue"> 
      <article class="slideshow">        
        <div class="slideshow-wrapper">
          <ul class="slides">
            <li class="slide-image">
              <img src="image/sd3.jpg" />
            </li>
            <li class="slide-image">
              <img src="image/sd2.jpg" />
            </li>
            <li class="slide-image">
              <img src="image/sd1.jpg" />
            </li>
            <li class="slide-image">
              <img src="image/sd1.jpg" />
            </li>
          </ul>
        </div>
        
    </article>
    </section>
     <div class="font-light">Cool Accessory</div>
     <center><div id="linehome"><img src="image/line1.png"></div></center>
  
    <div id="wrap-access">
      <div id="columns" class="columns_4">
      <a href="#"><figure> <img src="image/cool-1.jpg">
          <figcaption>Lagrad</figcaption>
          <div class="t-pp">ตะเกียงเทียน</figcaption><br> <span class="price">790 บาท</span>
        </figure></a> 

       <a href="#"><figure> <img src="image/cool-2.jpg">
          <figcaption>Satsumas</figcaption>
          <div class="t-pp">ที่วางกระถางต้นไม้</figcaption><br> <span class="price">2,490 บาท</span>
        </figure></a> 

        <a href="#"><figure> <img src="image/cool-3.jpg">
          <figcaption>Rosepepper</figcaption>
          <div class="t-pp">กระถางต้นไม้</figcaption><br> <span class="price">259 บาท</span>
        </figure></a> 

        <a href="#"><figure> <img src="image/cool-4.jpg">
          <figcaption>Salland</figcaption>
          <div class="t-pp">กิ่งไม้ประดับ, มีกลิ่นหอม</figcaption><br> <span class="price">139 บาท</span>
        </figure></a> 

      </div>
      </div>

      <div class="font-light">New Products</div>
     <center><div id="linehome"><img src="image/line1.png"></div></center>
  
    <div id="wrap-access">
      <div id="columns" class="columns_4">
      <a href="#"><figure> <img src="image/b6.jpg">
          <figcaption>Sexdexrhamn</figcaption>
          <div class="t-pp">โซฟา3ที่นั่ง</figcaption><br> <span class="price">17,900 บาท</span>
        </figure></a> 

       <a href="#"><figure> <img src="image/b7.jpg">
          <figcaption>Sexdexrhamn</figcaption>
          <div class="t-pp">เก้าอี้นวมตัวยาว</figcaption><br> <span class="price">14,500 บาท</span>
        </figure></a> 

        <a href="#"><figure> <img src="image/b8.jpg">
          <figcaption>Sexdexrhamn</figcaption>
          <div class="t-pp">โซฟา 3 ที่นั่ง</figcaption><br> <span class="price">22,590 บาท</span>
        </figure></a> 

        <a href="#"><figure> <img src="image/b9.jpg">
          <figcaption>Sexdexrhamn</figcaption>
          <div class="t-pp">อาร์มแชร์</figcaption><br> <span class="price">14,090 บาท</span>
        </figure></a> 

        </div>
      </div>
      

      <div class="font-light">Life Style</div>
      <center><div id="linehome"><img src="image/line1.png"></div></center>
   <div id="wrap-style">
      <div id="style-1" class="animated headShake"><img src="image/b1.jpg"><p class="st-p">  &nbsp;&nbsp;เพิ่มเสน่ห์ให้กับมุมนั่งเล่น ด้วยกรอบรูป และตู้ชั้นวางสุดชิคลองปรับเปลี่ยนมุมมองให้กับห้องนั่งเล่น  </p></div>

      <div id="style-1" class="animated headShake"><img src="image/b2.jpg"><p class="st-p">  &nbsp;&nbsp;&nbsp;ตกแต่งห้องนั่งเล่น ด้วยโทนสีพาสเทลแสนหวาน พร้อมข้าวของเครื่องใช้ในสไตล์วินเทจ ให้ห้องคุณสวยมีเสน่ห์มากยิ่งขึ้น</p></div>

      <div id="style-1" class="animated headShake"><img src="image/b3.jpg"><p class="st-p">  &nbsp;&nbsp;&nbsp;ลองปรับเปลี่ยนมุมทำงานแบบเดิมๆของคุณ ด้วยเฟอร์นิเจอร์ไม้แท้ที่ออกแบบมาในสไตล์วิเทจ เพื่อสร้างความรู้สึกใหม่ให้กับการทำงาน</p></div>

      <div id="style-1" class="animated headShake"><img src="image/b4.jpg"><p class="st-p">  &nbsp;&nbsp;&nbsp;เพิ่มมุมมองให้ห้องสวย ด้วยชั้นวางของ สองสไตล์เพิ่มความแตกต่างแต่ลงตัว ให้กับห้องนั่งเล่น ด้วยชั้นวางของ ที่ผสมสผานสองสไตล์เข้าด้วยกัน</p></div>

      <div id="style-1" class="animated headShake"><img src="image/b5.jpg"><p class="st-p">  &nbsp;&nbsp;&nbsp;งาน Built-In ห้องแต่งตัว สวยงาม หรูหรา ออกแบบห้องแต่งตัวให้สวยสง่า ด้วยงาน Built-In ดีไซน์หรูหรา พร้อมวัสดุเกรดพรีเมี่ยม</p></div>




   </div><!-- end "wrap-style" -->
	</div><!-- end wrapper -->
 <footer>
          <div id="footer1">
            <center><img src="image/logo.png" width="125" height="40"><br> CopyRight
              C. Suppalak 13560285<br> ICT:Silpakorn<br>This website is
              for educational purposes only . </center>
          </div>
          <div id="footer2">
            <center>
              <div id="search">
              <form action="search.php" method="POST">
              <input placeholder='Search' required='' type='text' name="search_name"><input type="submit" name="submit" id="sub1">
              </form>
              </div>
              <div id="icon-search"><a href="#"><i class="fa fa-facebook"></i></a>&nbsp;&nbsp;
                <a href="#"><i class="fa fa-instagram"></i></a>&nbsp;&nbsp;
                <a href="#"><i class="fa fa-twitter"></i></a> </div>
            </center>
          </div>
      </footer>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js'></script>
</body>
</html>