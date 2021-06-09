<?php
	$conn = mysqli_connect("localhost","root","cindy1115","soso");
	session_start();
	$member_id = $_SESSION[id];
	$product_id = $_POST[product_id];
	$program = $_POST[program];
	$price = $_POST[price];
	$payway = $_POST[payway];
	$name = $_POST[name];
	$address = $_POST[address];
	$phonenumber = $_POST[phonenumber];
	$note = $_POST[note];

	$sql_num = "SELECT * FROM transaction";
	$result_num = mysqli_query($conn,$sql_num);
	if($result_num){
		$num = mysqli_num_rows($result_num);
		$new = $num + 1;
	}

	$sql_t = "INSERT INTO transaction VALUES('$new','$program','$price','$payway','$note','$member_id','$product_id')";
	$result = mysqli_query($conn,$sql_t);

	$sql_p = "SELECT * FROM product WHERE id = '$product_id'";
	$result_p = mysqli_query($conn, $sql_p);
	$row_p = mysqli_fetch_array($result_p);

	if($result){
		echo "<script>alert('成功下單【$row_p[name]】之$program')</script>";
		$url = "home.php";
		echo "<script>window.location.href = '$url'</script>";
	}else{
		echo "<script>alert('下單失敗')</script>";
		$url = "order.php";
		echo "<script>window.location.href = '$url'</script>";
	}
?>
