<?php
	require_once("session.php");
?>
<html> 
<head>
<title>리뷰등록 결과</title>
<meta charset="UTF-8"/>
</head>
<body>
<?php
	require_once('dbmysong.php');
	
	if(!isset($_SESSION['id'])){
		exit('<a href="real.php">로그인 상태가 아닙니다. 홈으로</a></body></html>');
	}
	
	if(empty($_POST['name'])) {
		exit('<a href="javascript:history.go(-1)">입력 폼을 채워주세요.</a></body></html>');
	}
	
	$dbc= mysqli_connect($host,$user,$pass,$dbname)
					or die("Error Connecting to MySQL Server.");
	

	$name = mysqli_real_escape_string($dbc, trim($_POST['name']));
	
	mysqli_query($dbc, 'set names utf8');

	$query= "delete from unit where unit_name='$name'";
	
	$result=mysqli_query($dbc, $query)
						 or die("Error Querying database.");
	
	mysqli_close($dbc);
	
	echo "삭제되었습니다..<br/><br/>";
	echo '<a href="/real.php">홈으로</a>';

?>
</body>
</html>