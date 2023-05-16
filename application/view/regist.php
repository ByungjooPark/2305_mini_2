<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Regist</title>
</head>
<body>
	<h1>회원 가입</h1>
	<br>
	<br>

	<!-- if로 작성 -->
	<?php if(isset($this->errMsg)) { ?>
		<div>
			<span><?php echo $this->errMsg ?></span>
		</div>
	<?php } ?>

	<!-- 삼항연산자로 작성 -->
	<div>
		<span><?php echo (isset($this->errMsg) ? $this->errMsg : "") ?></span>
	</div>

	<form action="/user/regist" method="POST">
		<label for="id">ID</label>
		<input type="text" name="id" id="id">
		<?php if(isset($this->arrError["id"])) { ?>
			<span><?php echo $this->arrError["id"] ?></span>
		<?php } ?>
		<br>
		<label for="pw">PW</label>
		<input type="text" name="pw" id="pw">
		<?php if(isset($this->arrError["pw"])) { ?>
			<span><?php echo $this->arrError["pw"] ?></span>
		<?php } ?>
		<br>
		<label for="pwChk">PW Check</label>
		<input type="text" name="pwChk" id="pwChk">
		<?php if(isset($this->arrError["pwChk"])) { ?>
			<span><?php echo $this->arrError["pwChk"] ?></span>
		<?php } ?>
		<br>
		<label for="name">NAME</label>
		<input type="text" name="name" id="name">
		<?php if(isset($this->arrError["name"])) { ?>
			<span><?php echo $this->arrError["name"] ?></span>
		<?php } ?>
		<br>
		<button type="submit">Regist</button>
	</form>
</body>
</html>