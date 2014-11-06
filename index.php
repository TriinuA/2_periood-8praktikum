<?php
			$name = "test";
			$value = "Miski_muu";
			$expire = time() + (60*60*24*7*2);
			//setcookie($name, $value, $expire);
			
			
		?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>2 periood 8 praktikum</title>
		<meta charset="utf-8">	  	
	</head>
	<body>
		<?php /*echo time()*/ ?>
		<pre>
			<?php print_r($_COOKIE); ?>
		</pre>


		<?php 
			/*setcookie($name, $value, $expire);*/
		 ?>
		<?php 
			/*$test = $_COOKIE["test"];
			echo $test;*/
			/*if isset($_COOKIE["test"]){
				echo $_COOKIE["test"];
			}
				else
					echo "";*/

			$test = isset($_COOKIE["test"]) ? $_COOKIE["test"] : "";

			setcookie($name, $value, $expire);
			setcookie($name, null);

			setcookie("test", "OneCookie", time() +3600); 
			setcookie("test", "OneCookie", time() -3600);

		?>


 

		
	
	</body>
</html>
