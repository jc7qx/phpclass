<html>
	<head>
	</head>
	<body>
			
		<?php
		
			$host = "localhost";
			$user = "root";
			$pass = "root";
			$dbname = "student_db";

			$link = mysqli_connect($host, $user, $pass, $dbname);
			mysqli_set_charset($link, "utf8");

			if (!$link){
				die("fail to connect to mysql or open db<br>");
			}


			$sql = "SELECT sid, name, cell, bdate FROM MyStudent";
			$result = mysqli_query($link, $sql);

			$outputDispaly = "";
			$myrowcount = 0;


			if (!$result){

				
				$outputDisplay .= "<p style='color: red;'>Mysql No:".mysqli_errno($db)."<br>";
				$outputDisplay .= "Mysql error: ".mysqli_error($db)."<br>";
				$outputDisplay .= "<br> SQL: ".$sql."<br>";
				$outputDisplay .= "<br> Mysql affected rows:".mysql_affected_rows($db)."</p>";
				
			} else {

				
				$outputDisplay = "<h3> 學生資料 </h3>";
				$outputDisplay .= "<table border=1 style ='color: black;'>";

				$outputDisplay .= "<tr><th>學號</th><th>姓名</th><th>手機</th><th>生日</th></tr>";

				$numresults = mysqli_num_rows($result);



				
				

				for ($i=0; $i < $numresults; $i++){
					if (!($i%2)==0){
						$outputDisplay .= "<tr style=\"background-color: #F5DEB3\">";
					} else {
						$outputDisplay .= "<tr style=\"background-color: white\">";
					}

					$myrowcount++;
					
					

					$row = mysqli_fetch_array($result);
					//echo $myrowcount."<br>";
					
			
					$sid = $row['sid'];
					$name = $row['name'];
					$cell = $row['cell'];
					$bdate = $row['bdate'];

					//echo $sid." ".$name." ".$cell." ".$bdate."<br>";

					
					$outputDisplay .= "<td>".$sid."</td>";
					$outputDisplay .= "<td>".$name."</td>";
					$outputDisplay .= "<td>".$cell."</td>";
					$outputDisplay .= "<td>".$bdate."</td>";
					
			

					$outputDisplay .= "</tr>";

				}
				$outputDisplay .= "</table>";
				
			}

			mysqli_close($link);
		?>

		<hr size = "4" style="background-color: #F5DEB3; color: #F5DEB3;">
		<?php
				print $outputDisplay;
		?>

	</body>

</html>