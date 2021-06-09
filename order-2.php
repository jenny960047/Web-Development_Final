<?php 
	session_start();
	if(!isset($_SESSION[id])){
		echo "<script>alert('請先登入會員！');</script>";
		echo "<script>window.location.href='login.php';</script>";
	}

  $conn = mysqli_connect("localhost", "root", "cindy1115", "soso");
  $member_id = $_SESSION[id];
  $sql_m = "SELECT * FROM members WHERE id = '$member_id'";
  $result_m = mysqli_query($conn, $sql_m);
  $row_m = mysqli_fetch_array($result_m);
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
  <link rel="stylesheet" href="css/order.css">
  <script src="js/order-2.js"></script>
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
  
  
  
  
  <div id="first">
    <div id="goods">
      <div id="image">
        <IMG SRC=elements/box-4.jpg></IMG>
      </div>
      <div id="dis">
        <div id="title">LUFT Duo 個人空氣淨化器｜清淨效果加倍、抗菌抗過敏－淨化每一次呼吸</div>
        <div id="author">
          <span>提案人</span>
          <a href="">LUFTQI</a>
        </div>
        <div id="detail">雙效合一 雙倍淨化｜實證口鼻風速高於大台清淨機15倍，最貼身的空氣防護罩！和細菌、病毒、異味、過敏說掰掰，專利光觸媒科技、完全無耗材，滿足一天至少 18 小時，用潔淨空氣保護每個人。</div>
      </div>
    </div>
  </div>
  
<form method="POST" action="order-check.php"> 
  <div id="second">
    <input type="hidden" name="product_id" value="6">
    <div id="section">▌回饋方案</div>
    <div id="must">選擇回饋方案</div id="must">
    <div id="case-tab">
      <input type="radio" name="tab" id="A" value="6200" required checked>
      <input type="radio" name="tab" id="B" value="1000">
      <input type="radio" name="tab" id="C" value="9300">
      <input type="radio" name="tab" id="D" value="28500">
      
      <input type="hidden" name="program" id="program" value="">

      <label for="A">　方案 A　</label>
      <label for="B">　方案 B　</label>
      <label for="C">　方案 C　</label>
      <label for="D">　方案 D　</label>

      <br>
      <br>
      <div class="card">
          <div id="banner">
            <IMG SRC=elements/banner-2-1.jpg></IMG>
          </div>
          <div id="dis-2">
            <div id="money">NT$6,200</div>
            <div id="order">
              <span class="i">【限量｜晚鳥雙人組】 LUFT Duo x 2</span>
              <br>
              <div class="j">
                <ul>
                 <li>◗ LUFT Duo x 2</li>
                 <li>◗ 導風帽 x 2</li>
                 <li>◗ 置杯座 x 2</li>
                 <li>◗ typeC 充電線 x 2</li>
                 <li>◗ 說明書與保固卡 x 2</li>
               </ul>
             </div>
            </div>
          </div>
      </div>
      <div class="card">
          <div id="banner">
            <IMG SRC=elements/banner-2-2.jpg></IMG>
          </div>
          <div id="dis-2">
            <div id="money">NT$1,000</div>
            <div id="order">
              <span class="i">【集資專屬｜香氛配件組】</span>
              <br>
              <div class="j">
                <ul>
                  <li>◗ 實木底座 x 1</li>
                  <li>◗ 金屬掛鉤 x 1</li>
                  <li>◗ 天然擴香玉 x 2</li>
                  <li>◗ 吊掛繩 x 1</li>
                </ul>
              </div>
            </div>
          </div>
      </div>
      <div class="card">
          <div id="banner">
            <IMG SRC=elements/banner-2-3.jpg></IMG>
          </div>
          <div id="dis-2">
            <div id="money">NT$9,300</div>
            <div id="order">
              <span class="i">【三人組｜隱藏色可選】 LUFT Duo x 3</span>
              <br>
              <div class="j">
                <ul>
                  <li>◗ LUFT Duo x 3</li>
                  <li>◗ 導風帽 x 3</li>
                  <li>◗ 置杯座 x 3</li>
                  <li>◗ typeC 充電線 x 3</li>
                  <li>◗ 說明書與保固卡 x 3</li>
                </ul>
              </div>
            </div>
          </div>
      </div>
      <div class="card">
          <div id="banner">
            <IMG SRC=elements/banner-2-4.jpg></IMG>
          </div>
          <div id="dis-2">
            <div id="money">NT$28,500</div>
            <div id="order">
              <span class="i">【來揪團10入組】 LUFT Duo x 10</span>
              <br>
              <div class="j">
                <ul>
                  <li>◗ LUFT Duo x 10</li>
                  <li>◗ 導風帽 x 10</li>
                  <li>◗ 置杯座 x 10</li>
                  <li>◗ typeC 充電線 x 10</li>
                  <li>◗ 說明書與保固卡 x 10</li>
                  <li>◗ 另贈送團主LUFT Cube x 1</li>
                </ul>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  <div id="third">
    <div id="section">▌訂單詳細</div>
    <div id="case">
      <div id="must" class="a">贊助金額</div>
        <input class="b" placeholder="（≥ 回饋方案）" name="price" id="entervalue" type="number" step="100" required>
      <div id="must" class="a">付款方式</div>
      <div id="payment-method">
        <div class="method">
          <input type="radio" id="credit" value="credit" name="payway" required checked>
          <label for="credit"><img src="elements/credit-card.png">　信用卡付款</label>
        </div> 
        <div class="method">
          <input type="radio" id="ATM" value="ATM" name="payway">
          <label for="ATM"><img src="elements/bank.png">　ATM轉帳或銀行臨櫃繳款</label>
        </div>
      </div>
      <br>
      <div id="must" class="a">收件人</div>
      <input class="b" type=text name="name" value="<?php echo $row_m[name];?>" required>
      <div id="must" class="a">收件地址</div>
      <input class="b" type=text name="address" value="<?php echo $row_m[address];?>" required>
      <div class="a">聯絡電話</div>
      <input class="b" type=text name="phonenumber" value="<?php echo $row_m[phonenumber];?>">
      <div class="a">備註</div>
      <textarea id="text" name="note" rows="5"></textarea>
    </div>
    <div class="button">
      <button class="confirm" onClick="return checkEnterValue()">確認贊助</button>   
    </div>
  </div>
</form>  
  
  
  
  
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