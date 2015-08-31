<html>
	<head></head>
	<body>
		<?php
			$host = "127.0.0.1";
			$user = "jc7qx";
			$pass = "";

			$link = mysqli_connect($host, $user, $pass);

			if (!$link){
				die("使用帳號：".$user." 密碼：".$pass." 連線到 ".$host." 失敗<br>");
			}
			
			echo "使用帳號：".$user." 密碼：".$pass." 連線到 ".$host." 成功<br>";

			$sql = "create database student_db";

			if (mysqli_query($link, $sql)){
				echo "<br>db created 成功<br>";
			} else {
				echo "<br>error creae db: ".mysqli_error($link)."<br>";
			}

			echo "<br> test string2";

			mysqli_close($link)
		?>
	</body>

</html>