<?php
	require_once("session.php");
?>
<html> 
<head>
<title>수정 결과</title>
<meta charset="UTF-8"/>
</head>
<body>
<?php
	require_once('dbmysong.php');
	
	if(!isset($_SESSION['id'])){
		exit('<a href="real.php">로그인 상태가 아닙니다. 홈으로</a></body></html>');
	}
	
	if(empty($_POST['name']) ||empty($_POST['attack']) ||empty($_POST['defence']) ||empty($_POST['money']) ||empty($_POST['time']) || empty($_FILES['picture']['tmp_name'])) {
		exit('<a href="javascript:history.go(-1)">입력 폼을 채워주세요.</a></body></html>');
	}
	
	if(!isset($_FILES['picture'])) {
		exit('<a href="javascript:history.go(-1)">이미지 업로드 에러가 발생했습니다.</a></body></html>');
	}
	
	$dbc= mysqli_connect($host,$user,$pass,$dbname)
					or die("Error Connecting to MySQL Server.");
	

	$name = mysqli_real_escape_string($dbc, trim($_POST['name']));
	$attack = mysqli_real_escape_string($dbc, trim($_POST['attack']));
	$defence = mysqli_real_escape_string($dbc, trim($_POST['defence']));
	$money = mysqli_real_escape_string($dbc, trim($_POST['money']));
	$time = mysqli_real_escape_string($dbc, trim($_POST['time']));
	$image = addslashes(file_get_contents($_FILES['picture']['tmp_name']));
	
	mysqli_query($dbc, 'set names utf8');

	$query= "delete from unit where unit_name='$name'";
	
	$result=mysqli_query($dbc, $query)
						 or die("Error Querying database.");
						 
	$query= "insert into unit values ('$name', $attack, $defence, $money, $time,'$image')";
	
	$result=mysqli_query($dbc, $query)
						 or die("Error Querying database.");
	
	mysqli_close($dbc);
	
	echo "수정되었습니다..<br/><br/>";
	echo '<a href="/real.php">홈으로</a>';

?>
</body>
</html>