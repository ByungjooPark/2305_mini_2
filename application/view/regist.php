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
		<input type="text" name="id" id="id" value="<?php echo (isset($this->inputData["id"]) ? $this->inputData["id"] : "" ) ?>">
		<button type="button" onclick="chkDuplicationId();">중복체크</button>
		<span id="errMsgId">
			<?php if(isset($this->arrError["id"])) {
				echo $this->arrError["id"];
			} ?>
		</span>
		<br>
		<label for="pw">PW</label>
		<input type="text" name="pw" id="pw">
		<span>
			<?php if(isset($this->arrError["pw"])) {
				echo $this->arrError["pw"];
			} ?>
		</span>
		<br>
		<label for="pwChk">PW Check</label>
		<input type="text" name="pwChk" id="pwChk">
		<span>
			<?php if(isset($this->arrError["pwChk"])) {
				echo $this->arrError["pwChk"];
			} ?>
		</span>
		<br>
		<label for="name">NAME</label>
		<input type="text" name="name" id="name" value="<?php echo (isset($this->inputData["name"]) ? $this->inputData["name"] : "" ) ?>">
		<span>
			<?php if(isset($this->arrError["name"])) {
				echo $this->arrError["name"];
			} ?>
		</span>
		<br>
		<button type="submit">Regist</button>
	</form>


	<script src="/application/view/js/common.js"></script>
</body>
</html>