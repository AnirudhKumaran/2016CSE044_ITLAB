<html>

	<head>
		<title>Hello World</title>
	</head>
	
	<body>
		<?php 
			echo "Hello World !"; 
			include("dbconnect.php");
			
			$x = 5;
			$y = 10;
			define("MINSIZE",50);
			
			function myTest(){
				global $x,$y;
				$y = $x + $y;
			}

			function incrvar(){
				static $x = 0;				
				echo "<br>";
				echo $x;
				$x++;
			}
			
			myTest();
			echo "<br>";
			echo $y;
			
			echo " Namratha";
			echo ",Laura Dauren";
			echo ",Dora";
			echo ",Alita";
			echo ",Milky Bar";
			
			echo "<br>";
			incrvar();
			incrvar();
			incrvar();
			echo "<br>";
			echo MINSIZE;
			echo "<br>";
			$array = array(1,2,3,4,5);
			
			foreach($array as $value){
				echo "Value : $value <br>";
			}

			$sal = array("James" => 1000,"Shwetha" => 1500,"Sunil" => 2000);
			echo "Salaries of James is ".$sal['James'];

			$str1 = "Hello World";
			$str2 = "1234";
			
			echo "<br>";
			echo $str1." ".$str2;

		?>
	</body>

</html>
