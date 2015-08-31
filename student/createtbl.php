<html>
	<head></head>
	<body>
		<?php
			$host = "localhost";
			$user = "root";
			$pass = "root";
			$dbname = "student_db";

			$link = mysqli_connect($host, $user, $pass, $dbname);

			if (!$link){
				die("connect mysql and open student_db ok<br>");
			} else{
				echo "fail to connect to mysql or open db<br>";
			}

			$sql = "CREATE TABLE MyStudent (
				sid VARCHAR(10) PRIMARY KEY,
				name VARCHAR(30) NOT NULL,
				bdate DATE,
				cell VARCHAR(10),
				email VARCHAR(50),
				reg_date TIMESTAMP
				)";

			if (mysqli_query($link, $sql)){
				echo "student table created 成功<br>";
			} else {
				echo "error creae table: ".mysqli_error($link)."<br>";
			}

			mysqli_close($link)
		?>
	</body>

</html>