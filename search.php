<html> 
<head>
<title>검색 결과</title>
<meta charset="UTF-8"/>
</head>
<body>
<?php
	require_once('dbmysong.php');

	$dbc= mysqli_connect($host,$user,$pass,$dbname)
					or die("Error Connecting to MySQL Server.");
	mysqli_query($dbc, 'set names utf8');
	
	$name = mysqli_real_escape_string($dbc, trim($_POST['name']));	
	$query="select attack, defence, unit_money, unit_time, picture from unit where unit_name='$name'";

	$result=mysqli_query($dbc, $query)
						 or die("Error Querying database.");
	

	
	echo "<img src='getpicturesearch.php?name=$name' alt='User Image' style='width:200px;height:200px;'/><br/>";
	

	while($row=mysqli_fetch_assoc($result)) {

		printf('<h3><div>공격력 : %d</div></h3>', $row['attack']);
		printf('<h3><div>방어력 : %d</div></h3>', $row['defence']);
		printf('<h3><div>가격 : %d</div></h3>', $row['unit_money']);
		printf('<h3><div>생산시간 : %d</div></h3>', $row['unit_time']);
		// printf('<img src="$s" />' , $row['picture']);

	}
	mysqli_free_result($result);

	mysqli_close($dbc);
?>
</body>
</html>