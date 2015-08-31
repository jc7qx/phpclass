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

			$sql = "UPDATE MyStudent SET bdate='1966/2/28' WHERE name='王大明'";

			if (mysqli_query($link, $sql)) {
			    echo "Record updated successfully";
			} else {
			    echo "Error updating record: " . mysqli_error($link);
			}

			mysqli_close($link);
		?>
	</body>

</html>