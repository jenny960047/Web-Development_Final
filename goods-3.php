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
	<link rel="stylesheet" href="css/goods.css">
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
	<main class="container">
		<article class="showcase">
			<div class="video">
				<iframe style="border-radius: 10px;overflow: hidden;z-index: 1; margin-top: 15px;" width="680" height="381" src="https://www.youtube.com/embed/X8e7O50vOu0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</article>
		<aside class="imformation">
			<div id="frame">
			<div class="lable"><p>海外｜群眾募資｜設計</p></div>
			<div class="title"><p>Biion親水特務鞋｜輕量抗菌、親水快乾，全球熱銷30國，2021最有型全場景鞋登陸台灣！</p></div>
			<div class="author">
				<div>提案人</div>
				<a href="">Biion X 有設計</a>
			</div>
			<div class="description">
				<p>我們是來自加拿大的Biion親水特務鞋，晴雨兩用，快乾止滑，吸震好走，顛覆大家對懶人鞋的邋塌印象，不只好穿還很時尚，一雙鞋駕馭休閒、正式場合！</p>
			</div>

			<div class="dd">
				<div class="money">
					<div class="a">NT$1,447,585</div>
					<div class="b">目標 NT$100,000</div>
				</div>
				<div class="percent">
					<div class="num">1,447%</div>
				</div>
			</div>
			<hr align=center width=250px color=#d9d9d9 SIZE=1 style="margin-top: 16px">
			<div class="subtle">
				<div class="n">
					<div class="o">贊助人數</div><div class="m">541</div>
				</div>
				<div class="n">
					<div class="o">剩餘時間</div><div class="m">27 天</div>
				</div>
				<div class="n">
					<div class="o">時程</div><div class="m">2021/03/03 10:30 – 2021/05/21 23:59</div>
				</div>
				
			</div>
			<div class="social">
				<div>
					<button class="b1" onclick="location.href='order-3.php'">贊助專案</button>
				</div>
				<div>
					<button class="b2">分享</button>
				</div>
			</div>
			</div>
		</aside>
	</main>
	<hr align=center width=80% color=#e6e6e6 SIZE=1>
	<div class="nav">	
		<div class="bar">
			<div class="select-now"><a href="">專案計畫</a></div>
			<div class="select"><a href="">回饋方案</a></div>
			<div class="select"><a href="">常見問題　25</a></div>
			<div class="select"><a href="">留言　25</a></div>
		</div>
	</div>
	<hr align=center width=80% color=#e6e6e6 SIZE=1>
	<div class="main">
		<div class="project">
			<div class="image"><IMG SRC=elements/goods-3-a.jpg width=80% 
				style="display:block; margin:auto; margin-bottom: 10px; border-radius: 10px;"></IMG></div>
			<div class="image"><IMG SRC=elements/goods-3-b.jpg width=80% 
				style="display:block; margin:auto; margin-bottom: 10px; border-radius: 10px;"></IMG></div>
			<div class="image"><IMG SRC=elements/goods-3-c.gif width=80% 
				style="display:block; margin:auto; margin-bottom: 10px; border-radius: 10px;"></IMG></div>
			<div class="image"><IMG SRC=elements/goods-3-d.jpg width=80% 
				style="display:block; margin:auto; margin-bottom: 10px; border-radius: 10px;"></IMG></div>
			<div class="image"><IMG SRC=elements/goods-3-e.gif width=80% 
				style="display:block; margin:auto; margin-bottom: 10px; border-radius: 10px;"></IMG></div>
			<div class="image"><IMG SRC=elements/goods-3-f.jpg width=80% 
				style="display:block; margin:auto; margin-bottom: 10px; border-radius: 10px;"></IMG></div>
			<div class="image"><IMG SRC=elements/goods-3-g.gif width=80% 
				style="display:block; margin:auto; margin-bottom: 10px; border-radius: 10px;"></IMG></div>
			<div class="image"><IMG SRC=elements/goods-3-h.jpg width=80% 
				style="display:block; margin:auto; margin-bottom: 10px; border-radius: 10px;"></IMG></div>
			<div class="image"><IMG SRC=elements/goods-3-i.gif width=80% 
				style="display:block; margin:auto; margin-bottom: 10px; border-radius: 10px;"></IMG></div>
			<div class="image"><IMG SRC=elements/goods-3-j.jpg width=80% 
				style="display:block; margin:auto; margin-bottom: 10px; border-radius: 10px;"></IMG></div>
			<div class="image"><IMG SRC=elements/goods-3-k.gif width=80% 
				style="display:block; margin:auto; margin-bottom: 10px; border-radius: 10px;"></IMG></div>
		</div>	
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