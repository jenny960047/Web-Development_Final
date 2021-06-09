<?php session_start(); ?>
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
	<link rel="stylesheet" href="css/about.css">
	<script src="js/about.js"></script>
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
							<li><a href="logout.php">公益計畫</a></li>
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
								<li><a href="">　登出　</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	<div class="showcase">
		<div class="words">
			<h1>
				<span><i>Do</i></span>
				<span><i>what</i></span>
				<span><i>defines</i></span>
				<span><i>you</i></span>
				<span><i>.</i></span>
			</h1>	
			<span id="p">搜搜 是一個募資平台。</span id="p">
			<span id="p">刊登各式各樣的創意計畫，歡迎每一位喜歡夢想、喜歡美好事物的人們。</span id="p">		
		</div>
	</div>
	<div class="container">
		<div class="box">
			<div class="content">
				<span><mark>▌對於支持者們...</mark></span>
				<p>每個計畫都會由發起者準備不同金額的贊助回饋。可以透過贊助這些最新、最快、最特別的商品或美好體驗、支持他們的夢想實現。</p>
				<p>計畫成功後，就能依照贊助的金額得到預購的驚喜回饋，同時也讓一件美好的事物發生在我們的生活中！</p>
				<p>計畫如果失敗了，支持的金額將會退回（不包含虛擬帳號轉帳交易手續費）。</p>
			</div>
		</div>
		<div class="box">
			<div class="content">
				<span><mark>▌對於想發起計畫的人...</mark></span>
				<p>在「搜搜」上實現夢想的第一步就是確定計畫目標。想做什麼計畫？實現它需要多少資金？如果在募資期限前達到目標，就能從支持者那裡獲得資金實現夢想！</p>
				<p>透過給予支持者獨特的回饋來吸引更多的募資。從單純地向支持者致謝，到預購的商品、預售的門票，甚至是限量商品、會員優惠等等各種獨家的獎勵，我們鼓勵發揮創意，提出吸引人的回饋來募集資金。</p>
			</div>
		</div>
	</div>
	<hr align=center width=80% color=#e6e6e6 SIZE=1>
	<div class="below">
		<aside class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/6J2zrnv4wiY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</aside>
		<article class="bigissue">
			<div class="stone">
				<div id="record">✎ 記錄</div>
				<div id="update">最後更新於 2021/04/07 00:00</div>
			</div>
			<div class="list">
				<ul>
					<li>
						<div class="big">成立時間</div>
						<div class="little">2021 / 04 / 07</div>
					</li>
					<li><div class="big">贊助總金額</div>
						<div class="little">NT$ 2,021,010,018</div>
					</li>
					<li>
						<div class="big">總贊助人次</div>
						<div class="little">1,908,780</div>
					</li>
					<li>
						<div class="big">總計畫數</div>
						<div class="little">3,626</div>
					</li>
					<li>
						<div class="big">總成功計畫數</div>
						<div class="little">2,594</div>
					</li>
				</ul>
			</div>
		</article>
	</div>
	<br><br><br>
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