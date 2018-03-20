<?php
	require_once("session.php");
	require_once("header.php");
?>
<header><h1>zerg</h1></header>
<nav>
<ul>
	<li><a href="writereviewform1.php">삽입</a></li>
	<li><a href="deleteform.php">삭제</a></li>
	<li><a href="reviseform.php">변경</a></li>
	<li><a href="searchform.php">검색</a></li>
</ul>
</nav>
<button id="btn">표시 안함</button>

<section class="model">
	<div id="write_review"><a href="writereviewform.php">리뷰 쓰기</a></div>
	<div id="refresh">리뷰 보기</div>
</section>
