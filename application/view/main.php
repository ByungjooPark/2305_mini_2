<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Shop Main</title>
</head>
<body>
	Shop Main
	<?php if(isset($this->loginFlg)) { ?>
		<a href="/user/logout">로그아웃</a>
	<?php } else {?>
		<a href="/user/login">로그인</a>
		<a href="/user/regist">회원가입</a>
	<?php }?>
</body>
</html>