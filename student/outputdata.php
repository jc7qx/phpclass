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

			if (!$link){
				die("connect mysql and open student_db ok<br>");
			} else{
				echo "fail to connect to mysql or open db<br>";
			}

			$sql = "SELECT sid, name, cell FROM MyStudent";
			$result = mysqli_query($link, $sql);

			if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			    while($row = mysqli_fetch_assoc($result)) {
			        echo "學號: " . $row["sid"]. " - 姓名: " . $row["name"]. " - 手機" . $row["cell"]. "<br>";
			    }
			} else {
			    echo "0 results";
			}

			mysqli_close($link);
		?>
	</body>

</html>