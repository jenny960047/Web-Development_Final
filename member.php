<?php 
	session_start();
	if(!isset($_SESSION[id])){
		echo "<script>alert('請先登入會員！');</script>";
		echo "<script>window.location.href='login.php';</script>";
	}
?>
<?php
	$conn = mysqli_connect("localhost", "root", "cindy1115", "soso");

	$sql1 = "select * from members where id like '$_SESSION[id]'";
	$result1 = mysqli_query($conn, $sql1);
	$row = mysqli_fetch_array($result1);

	session_start();

	if($_GET['act'] == update){
		$sql2 = "update members set phonenumber = '$_POST[phonenumber]', gender = '$_POST[gender]', birthday = '$_POST[birthday]', address = '$_POST[address]', introduction = '$_POST[introduction]' where email = '$_POST[email]'";
		$result2 = mysqli_query($conn, $sql2);

		if($result2){
			echo "<script>alert('會員資料修改成功');parent.location.href='member.php';</script>";
		}else{
			echo "<script>alert('修改失敗！')</script>";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>搜搜 soso｜Fund New Things</title>
	<meta name="description" content="搜搜 soso is a Crowdfunding platform in Taiwan. 搜搜 soso 是一個群眾募資平台。我們正在打造一個環境，讓不限領域的創意，能更容易地實踐。">
	<meta name="keywords" content="SOSO, 搜搜, 募資平台, 群眾募資, 預購式專案, 訂購式專案">
	<meta name="author" content="2021 管理學士班戰隊">
	<meta name="copyright" content="2021 管理學士班戰隊">
	<meta http-equiv="Content-Language" content="zh-TW">
	<link rel="stylesheet" href="css/member.css">
	<link rel="icon" href="elements/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="elements/favicon.ico" type="image/x-icon" />
</head>
<body>
	<header>
		<div class="header-container">
			<div class="header-left">
				<div class="logo">
					<img id="bulb" src="elements/bulb2.png">
					<a href="home.php">搜搜</a>
				</div>
				<ul id="left-menu">
					<li><a href="about.php">關於</a></li>
					<li><a href="">提案</a></li>
					<li><a href="">探索</a>
						<ul>
							<li><a href="">生活科技</a></li>
							<li><a href="">漫畫插圖</a></li>
							<li><a href="">影視音樂</a></li>
							<li><a href="">電玩遊戲</a></li>
							<li><a href="">教育專案</a></li>
							<li><a href="">公益計畫</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="<?php 
					if(isset($_SESSION[id])){
						echo 'header-right-after' ;
					}else{
						echo 'header-right-before';
					}	
				?>">
				<!--登入前-->
				<div id="before-login">
					<ul id="right-menu">
						<li><a href="login.php" style="margin-right:25px;">登入</a></li>
						<li><a href="signup.php">註冊</a></li>
					</ul>
				</div>
				<!--登入後-->
				<div id="after-login">
					<ul id="right-menu">
						<li><a href="" style="margin-right:25px;"><img id="mail" src="elements/mail.png"></a></li>
						<li><img id="user" src="elements/user.png"></li>
						<li><a href="" style="margin-left:5px;"><img id="triangle" src="elements/triangle.png"></a>
							<ul>
								<li><a href="member.php">個人設定</a></li>
								<li><a href="">團隊設定</a></li>
								<li><a href="">追蹤計畫</a></li>
								<li><a href="">贊助紀錄</a></li>
								<li><a href="">提案紀錄</a></li>
								<li><a href="logout.php">　登出　</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	<hr align=center width=80% color=#e6e6e6 SIZE=1>
	<div class="container">
		<div class="left">
			<div class="button_pick">
				<button>個人設定</button>
				<div id="vertical-line_menu"></div>
			</div>
			<div class="button">
				<button>團隊設定</button>
			</div>
			<div class="button">
				<button>追蹤計畫</button>
			</div>
			<div class="button">
				<button>贊助紀錄</button>
			</div>
			<div class="button">
				<button>提案紀錄</button>
			</div>
		</div>
		<div id="verticle-line"></div>
		<div class="right">
			<div id="frame">
				<div id="tt">
					<span id="top">個人設定</span>
					<span id="self"><a href="">個人頁面</a></span>
				</div>
				<div id="article">
					<div id="photo">
						<img src="elements/user.png">
						<div class="b">大頭貼</div>
						<input type="file" name="file" accept="image/*">
					</div>
					<div id="information">
						<form action = "member.php?act=update" method = "POST">
							<div>
								<div class="b" id="must">姓名</div>
								<input class="a" placeholder="" name="name" type="text" value= "<?php echo $row['name']; ?>" disabled>
							</div>
							<div>
								<div class="b" id="must">電子信箱</div>
								<input class="a" placeholder="" name="email" type="email" value= "<?php echo $row['email']; ?>" disabled> 
							</div>
							<div>
								<div class="b">手機號碼</div>
								<input class="a" placeholder="" name="phonenumber" type="tel" pattern="09\d{8}" value= "<?php echo $row['phonenumber']; ?>">
							</div>
							<div id="sub">
								<input name="sub" type="checkbox" checked>訂閱搜搜電子報
							</div>
							<div>
								<div class="b">性別</div>
								<select class="a" name="gender" id="">
									<option value= "<?php echo $row['gender']; ?>"><?php echo $row['gender']; ?></option>
									<option value="男">男</option>
									<option value="女">女</option>
									<option value="其他">其他</option>
								</select>
							</div>
							<div>
								<div class="b">生日</div>
								<input class="a" type="date" name="birthday" value= "<?php echo $row['birthday']; ?>">
							</div>
							<div>
								<div class="b">地址</div>
								<input class="a" type="text" placeholder="" name="address" value= "<?php echo $row['address']; ?>">
							</div>
							<div>
								<div class="b">個人介紹</div>
								<textarea id="text" name="introduction" rows="4"><?php echo $row['introduction']; ?></textarea>
							</div>
							<div class="submit">
								<button id="submit" onClick="validateForm(this.form)">更新</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>	
	</div>
	<hr align=center width=80% color=#e6e6e6 SIZE=1>
	<br><br><br>
	<div class="footer">
		<div class="footer-left">
			<div class="im">
				<p>關於</p>
				<br>
				<a href="">關於我們</a>
				<a href="">人才招募</a>
				<a href="">商標資源</a>
			</div>
			<div class="im">
				<p>協助</p>
				<br>
				<a href="">常見問題</a>
				<a href="">使用條款</a>
				<a href="">隱私權政策</a>
			</div>
			<div class="im">
				<p>社群</p>
				<br>
				<a href="">Facebook</a>
				<a href="">Instagram</a>
				<a href="">Twitter</a>
			</div>
		</div>
		<div class="footer-right">
			<div class="logo-footer">
				<img id="bulb" src="elements/bulb2.png">
				<a href="home.php">搜搜</a>
			</div>
			<div id="copyright">&copy; 2021 管理學士班戰隊. All rights reserved.</div>
		</div>	
	</div>
</body>
</html>