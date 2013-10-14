<html>
	<title>Hello,PHP!</title>
	<body>
		<?php
			session_start();
			$_SESSION['views']=1;
		?>
		<div class="link">
			<?php include 'link.php'; ?>
		</div>
	</body>
</html>