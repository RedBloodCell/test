<html>
	<head>
		<title>注册</title>
	</head>
	<body style="background-image:url(注册背景.jpg);background-position:top center; background-repeat:no-repeat">
		<center>
		<h1>LibrarySo注册</h1>
		<form method = "post" action = "save_register.php">
			<label for = "uname">　　昵称:</label>
			<input type = "text" name = "uname" id = "uname" placeholder = "请输入你的昵称"/>
			<br>
			<label for = "tname">　　姓名:</label>
			<input type = "text" name = "tname" id = "tname" placeholder = "请输入你的姓名"/>
			<br>
			<label for = "num">　　学号:</label>
			<input type = "text" name = "num" id = "num" placeholder = "请输入学号：14051415"/>
			<br>
			<label for = "password">　　密码:</label>
			<input type = "text" name = "password" id = "password" placeholder = "请输入你的密码"/>
			<br>
			<label for = "password">确认密码:</label>
			<input type = "text" name = "cpassword" id = "cpassword" placeholder = "请再次输入你的密码，保证两次输入相同"/>
			<br>
			<label for = "phonenum">手机号码:</label>
			<input type = "text" name = "phonenum" id = "phonenum" placeholder = "请输入手机号码：13712341234"/>
			<br>
			<label for = "yanzhengma">　　　　　　验证码:</label>
			<input type = "text" name = "yanzhengma" placeholder = "不区分大小写"/>
			<img style = "cursor : pointer" src = "Verification code generation.php" onclick = "this.src = this.src+'?' + Math.random();"/>
			<br>
			<input type = "submit" name = "gister" id = "gister" value = "注册"/>
		</form>
		</center>
	</body>
</html>