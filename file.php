<html>
	<title>Hello,PHP!</title>
	<body>
		<?php
			$file = fopen("D://test.txt", "r") or exit("Unable to open file!");
			//Output a line of the file until the end is reached
			while(!feof($file))
		  	{
		  		echo fgets($file). "<br />";
		  	}
			fclose($file);
		?>
	</body>
</html