<html>
	<head></head>
	<body>
		<?php
			$host = "localhost";
			$user = "root";
			$pass = "root";
			$dbname = "student_db";

			$link = mysqli_connect($host, $user, $pass, $dbname);
			mysqli_set_charset($link, "utf8");

			if ($link){
				echo "connect mysql and open student_db ok<br>";
			} else{
				die("fail to connect to mysql or open db<br>");
			}

			$sql = "INSERT INTO MyStudent(sid, name, cell, bdate) VALUES('10214E993','李大同','0919330123','1982/1/2')";

			if (mysqli_query($link, $sql)){
				echo "insert data OK";
			} else {
				echo "fail to insert data";
			}

			mysqli_close($link);
		?>
	</body>

</html>