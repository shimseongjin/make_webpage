<?php
	require_once("session.php");
?>
<!DOCTYPE html>
<html> 
<head>
<title>유닛 수정</title>
<meta charset="UTF-8"/>
</head>
<body>
<?php
	if(!isset($_SESSION['id'])){
		exit('<a href="real.php">로그인 상태가 아닙니다. 홈으로</a></body></html>');
	}
?>
	<h1>수정</h1>
	<form method="post" enctype="multipart/form-data" action="revise.php">
		유닛 이름:<br/>
		<input type="text" name="name" placeholder="유닛 이름을 입력하세요"/><br/>
		공격력:<br/>
		<input type="number" name="attack" placeholder="공격력을 입력하세요"/><br/>
		방어력:<br/>
		<input type="number" name="defence" placeholder="방어력을 입력하세요"/><br/>
		가격:<br/>
		<input type="number" name="money" placeholder="가격을 입력하세요"/><br/>
		생산시간:<br/>
		<input type="number" name="time" placeholder="생산시간을 입력하세요"/><br/>
		이미지:<br/>
		<input type="file" name="picture"/>
		<br/>
		<br/>
		<input type="submit" value="등록"/>
	</form>
</body>
</html>