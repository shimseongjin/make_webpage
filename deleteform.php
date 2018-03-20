<?php
	require_once("session.php");
?>
<!DOCTYPE html>
<html> 
<head>
<title>유닛 삭제</title>
<meta charset="UTF-8"/>
</head>
<body>
<?php
	if(!isset($_SESSION['id'])){
		exit('<a href="real.php">로그인 상태가 아닙니다. 홈으로</a></body></html>');
	}
?>
	<h1>삭제</h1>
	<form method="post" enctype="multipart/form-data" action="delete.php">
		유닛 이름:<br/>
		<input type="text" name="name" placeholder="유닛 이름을 입력하세요"/><br/>
		<br/>
		<br/>
		<input type="submit" value="제출"/>
	</form>
</body>
</html>