<?php
	require'connect.php';
	session_start();

	$userName = $_POST['name_member'];
	$password = $_POST['password'];



	$sql ="SELECT * FROM member WHERE name_member='{$userName}' AND password='{$password}' ";
	$query = mysqli_query($objConnect,$sql);

	$rows = mysqli_fetch_array($query);

	if(!$rows)
	{
		echo "error";

	}else{
		$_SESSION['test'] = "name";
		$_SESSION['name_member'] = $rows['name_member'];
		$_SESSION['id_member'] = $rows['id_member'];
		
		$_SESSION['cart']['id_product']['quantity'];
		$_SESSION['number_product']=0;
		session_write_close();

	if($rows['role'] == '1'){

		header('location:admin_page.php');

	}else{

		header('location:product.php');
	}
}
?>