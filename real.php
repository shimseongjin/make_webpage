<?php
	require_once("session.php");
	require_once("header.php");
?>
<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
img{
	border-radius: 10px 10px 10px 10px;
	width: 300px;
	height: 300px;
}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
   <?php
	if(!isset($_SESSION['id']))
		echo '<a href="login1.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">로그인</a>';
	else
		echo '<a href="logout1.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">로그아웃</a>';
?>
    <a href="signup.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">회원가입</a>

  </div>
</div>

<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" style="z-index:3;width:250px;margin-top:43px;" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4 class="w3-bar-item"><b>Menu</b></h4>
  <a class="w3-bar-item w3-button w3-hover-black" href="mainzerg.php">저그</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="mainterran.php">테란</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="mainprotoss.php">프로토스</a>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">저그</h1>
      <p>오버 마인드는 셀러브레이트를 살해한 프로토스에 대해 분노를 느끼고 있다고 하며, '자츠를 살해한 프로토스인은 뭔가 다르다. 이들은 다크템플러들이며 이들이 내뿜는 정신에너지는 자신과 비슷하다'고 한다. 자츠를 살해한 프로토스는 제라툴이며, 이 제라툴의 생각을 읽을 때 알아낸 것이 프로토스의 고향 아이어 행서어의 위치라고 한다. 이말을 들은 다고스는 케리건에게 템플러들을 유인할 함정을 짜라고 하고, 오버마인드는 아이어를 침공하기 시작한다.</p>
    </div>
    <div class="w3-third w3-container">
		<img class="w3-border w3-padding-large w3-padding-32 w3-center" src="images/zerg.jpg">
    </div>
  </div>

  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">테란</h1>
      <p>황제의 자리에 오른 멩스크. 그러나 그에게는 한가지 골칫덩어리가 있는데 그것은 우주해적 앨런 셰자르. 멩스크는 세러브레이트를 조작해서 저그를 이용할 정도인 앨런 셰자르를 치기로 하고 구이 몬태그로 하여금 사전작업을 시킨다. 그 다음 톰 카젠스카이와 마젤란을 시켜서 셰자르를 치려하나 이때 프로토스의 집정관 모조는 멩스크의 부대에 셰자르에게 잡혀있는 자신들의 일행을 구해달라고 요청한다. 멩스크는 무시하라고 하지만 카젠스카이와 마젤란은 모조, 윌브링어, 대니모트를 구해내고 아이어에 있던 셰자르를 몰아내는데 성공한다.</p>
    </div>
    <div class="w3-third w3-container">
      <img class="w3-border w3-padding-large w3-padding-32 w3-center" src="images/terran.jpg">
    </div>
  </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">프로토스</h1>
      <p>마침내 오버마인드의 방어망을 파괴하고 테사다는 자신의 빛의 힘과 다크템플러의 공허의 힘을 열어서 오버마인드를 파괴하지만 살아남은 제라툴과 페닉스, 레이너는 폐허가 된 아이어를 보기만 하고, 케리건은 자신의 때가 왔다는 생각을 하게 된다.</p>
    </div>
    <div class="w3-third w3-container">
 
	  <img class="w3-border w3-padding-large w3-padding-32 w3-center" src="images/protoss.jpg">

    </div>
  </div>

  <!-- Pagination -->
  

  

<!-- END MAIN -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
</html>
