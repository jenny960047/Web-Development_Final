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
	<link rel="stylesheet" href="css/home.css">
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
				?>" >
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
	<div>
		<ul class="slides">
			<input type="radio" id="control-1" name="control" checked>
			<input type="radio" id="control-2" name="control">
			<input type="radio" id="control-3" name="control">

			<li class="slide"><IMG SRC=elements/3.jpg></IMG></li>
			<li class="slide"><IMG SRC=elements/1.png></IMG></li>
			<li class="slide"><IMG SRC=elements/2.png></IMG></li>
			
			<div class="controls-visible">
				<label for="control-1"></label>
				<label for="control-2"></label>
				<label for="control-3"></label>	
			</div>
		</ul>
	</div>
	<nav>
		<div class="select-bar">
			<ul>
				<li><a href="">生活科技</a></li>
				<li><a href="">漫畫插圖</a></li>
				<li><a href="">影視音樂</a></li>
				<li><a href="">電玩遊戲</a></li>
				<li><a href="">教育專案</a></li>
				<li><a href="">公益計畫</a></li>
			</ul>
		</div>
	</nav>
	<hr align=center width=80% color=#e6e6e6 SIZE=1>
	<main class="container">
		<div class="bar">
			<div class="bar-right">
				<span>▌</span>
				<div class="select-1">
					<select>
					    <option>全部</option>
					    <option selected="">群眾募資</option>
					    <option>預購式專案</option>
					    <option>訂閱式專案</option>S
					</select>
				</div>
				<span>+</span>
				<div class="select-2">
					<select>
					    <option>全部</option>
					    <option>生活科技</option>
					    <option>漫畫插圖</option>
					    <option>影視音樂</option>
					    <option>電玩遊戲</option>
					    <option>教育專案</option>
					    <option>公益計畫</option>
					</select>
				</div>
			</div>
			<div class="bar-left">
				<div class="search">
					<div id="a">
						<input type="search" name="search" placeholder="搜尋計畫" style="padding: 6px; border-radius: 10px; border: 1px #e6e6e6 solid;">
					</div>
      				<div id="b">
      					<button>GO</button>
      				</div>
				</div>
				<div class="order">	
				</div>
			</div>
		</div>
		
		<div class="section">
			<div class="card">
				<div class="img">
					<img src="elements/box-1.jpg">
				</div>
				<div class="info">
					<div class="tt">
						<a href="">【 Dalin｜達人電動工具組 】12 種匠人工具一包搞定，新時代 Maker 最佳神器！</a>
					</div>
					<div class="author">
						<div>By</div>
						<a href="">Anywash</a>
					</div>
					<div class="description">
						超高頻無痕除漬，時尚便攜、隨髒隨清 ! 市面最輕量超強CP值，一筆解決你的除漬惡夢。衣物隨保潔淨，走路抬頭挺胸！	
					</div>
				</div>
			</div>
			<div class="card">
				<div class="img">
					<img src="elements/box-2.jfif">
				</div>
				<div class="info">
					<div class="tt">
						<a href="goods.php">你與毛孩共同的家【享貓小棧】｜大小空間都適用的模組收納架</a>
					</div>
					<div class="author">
						<div>By</div>
						<a href="">MOODI WOOD</a>
					</div>
					<div class="description">
						一款為毛孩也為你設計，真正兼顧兩方，能當跳台又不犧牲收納空間的模組收納架。打造你與毛孩的質感生活。	
					</div>
				</div>
			</div>
			<div class="card">
				<div class="img">
					<img src="elements/box-3.jpg">
				</div>
				<div class="info">
					<div class="tt">
						<a href="">【 Duit the table｜風靡韓國的餐桌型寵物餵食機 】讓你的毛小孩輕鬆上餐桌，定時定量，按時吃飯飯！</a>
					</div>
					<div class="author">
						<div>By</div>
						<a href="">duit</a>
					</div>
					<div class="description">
						韓國最美寵物用品品牌，韓國製，風靡韓國毛孩界！	
					</div>
				</div>
			</div>
			<div class="card">
				<div class="img">
					<img src="elements/box-4.jpg">
				</div>
				<div class="info">
					<div class="tt">
						<a href="goods-2.php">LUFT Duo 個人空氣淨化器｜清淨效果加倍、抗菌抗過敏－淨化每一次呼吸</a>
					</div>
					<div class="author">
						<div>By</div>
						<a href="">LUFTQI</a>
					</div>
					<div class="description">
						雙效合一 雙倍淨化｜實證口鼻風速高於大台清淨機15倍，最貼身的空氣防護罩！和細菌、病毒、異味、過敏說掰掰，專利光觸...
					</div>
				</div>
			</div>
			<div class="card">
				<div class="img">
					<img src="elements/box-5.jpg">
				</div>
				<div class="info">
					<div class="tt">
						<a href="">Anywash超聲波洗衣筆 | 30秒即刻救援 輕鬆去漬衣物零損傷</a>
					</div>
					<div class="author">
						<div>By</div>
						<a href="">Anywash</a>
					</div>
					<div class="description">
						超高頻無痕除漬，時尚便攜、隨髒隨清 ! 市面最輕量超強CP值，一筆解決你的除漬惡夢。衣物隨保潔淨，走路抬頭挺胸！
					</div>
				</div>
			</div>
			<div class="card">
				<div class="img">
					<img src="elements/box-6.jpg">
				</div>
				<div class="info">
					<div class="tt">
						<a href="goods-3.php">Biion親水特務鞋｜輕量抗菌、親水快乾，全球熱銷30國，2021最有型全場景鞋登陸台灣！</a>
					</div>
					<div class="author">
						<div>By</div>
						<a href="">Biion X 有設計</a>
					</div>
					<div class="description">
						我們是來自加拿大的Biion親水特務鞋， 晴雨兩用，快乾止滑，吸震好走，顛覆大家對懶人鞋的邋塌印象，不只好穿還很時...
					</div>
				</div>
			</div>
			<div class="card">
				<div class="img">
					<img src="elements/box-7.jpg">
				</div>
				<div class="info">
					<div class="tt">
						<a href="">SALU！一起大鬧世界吧！</a>
					</div>
					<div class="author">
						<div>By</div>
						<a href="">林子竣</a>
					</div>
					<div class="description">
						SALU是創業Youtuber，從事各項公益挑戰。透過訂閱募資作為創作與創業的資本，並持續以公益性的創作回饋社會。
					</div>
				</div>
			</div>
			<div class="card">
				<div class="img">
					<img src="elements/box-8.jpg">
				</div>
				<div class="info">
					<div class="tt">
						<a href="">【枕上人】獨家氣閥調節技術，記憶你每天最舒適的睡眠高度</a>
					</div>
					<div class="author">
						<div>By</div>
						<a href="">優多生活</a>
					</div>
					<div class="description">
						多久沒有好好地睡上一覺?獨創專屬調節設計，讓你滿足所有狀況及需求。因為我，不只要做你的心上人，更要做你的枕上人。
					</div>
				</div>
			</div>
			<div class="card-loading">
				<div class="img">
					
				</div>
				<div class="info">
					<div class="tt">
						<a href=""></a>
					</div>
					<div class="author">
						
					</div>
					<div class="description">
							
					</div>
				</div>
			</div>
			<div class="card-loading">
				<div class="img">
					
				</div>
				<div class="info">
					<div class="tt">
						<a href=""></a>
					</div>
					<div class="author">
						
					</div>
					<div class="description">
							
					</div>
				</div>
			</div>
			<div class="card-loading">
				<div class="img">
					
				</div>
				<div class="info">
					<div class="tt">
						<a href=""></a>
					</div>
					<div class="author">
						
					</div>
					<div class="description">
							
					</div>
				</div>
			</div>
			<div class="card-loading">
				<div class="img">
					
				</div>
				<div class="info">
					<div class="tt">
						<a href=""></a>
					</div>
					<div class="author">
						
					</div>
					<div class="description">
							
					</div>
				</div>
			</div>
		</div>
		<br><br><br>
		<div class="bottom">
			<div class="page">
			<a href=""><</a>
			<a href="" id="now">1</a>
			<a href="">2</a>
			<a href="">3</a>
			<a>4</a>
			<a href="">5</a>
			<a href="">></a>
			</div>
		</div>		
	</main>
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