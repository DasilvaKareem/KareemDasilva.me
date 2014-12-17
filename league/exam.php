<?php 
	session_start();
	

?>
<html>
	<head>
			<script type="text/javascript" src="kareem.js"></script>
		</head>
	<body>
		<form method="post" action="posting.php">
				<TABLE>
					<tr><td><input type="text" name="article"></td></tr>
					<tr><td><textarea rows="4" cols="50" name="subject"></textarea></td></tr>
					<tr><td><input type="submit" value="submit article"></td></tr>
					</TABLE>
		</form>
	</body>
</html>