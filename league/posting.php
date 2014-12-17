<?php
	$article = $_POST['article'];
	$subject = $_POST['subject'];
	echo 'you article has been submitted';
	
?>
<html>
	<head>
		
	</head>
	<body>
		<table>
			<tr>
				<td><?php print($article);?></td><td></td>
			</tr>
			<tr>
				<td><?php print_r($subject);?></td><td></td>
			</tr>
		</table>
	</body>
</html>