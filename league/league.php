<html>
	<head>
		<style>
			.container{
				width:1283px;
			}
			.luci{
				width:406px;
				background-color:red;
				float:left;
				height:500px;
			}
			.natrix{
				width:406px;
				background-color:blue;
				float:left;
				height:500px;

			}
			.fatalraven{
				width:406px;
				background-color:yellow;
				float:left;
				height:500px;

			}
		</style>
		<link rel="stylesheet" href="css/bootstrap.css">
	</head>
	<body onload="laugh()">
		<div class="text-center">
<?php
include('riot.php');
//testing classes
//$summoner_name = ['fatalraven','natrixdream','lucianoguf'];
$natrixdream = '25331321';

$fatalraven = '23071393';
$luciano = '26360623';
$test = new riotapi('na');

$results=$test->getStats($luciano);

$results2=$test->getLeague($luciano, "entry");

?>

<?php
//Prints Luci wins and loses

	?>
	<div class="luci">
	<h1>Hadari"LucianoGUF"</h1>
	<img src="Udyr.jpg" alt="..." class="img-circle">
	<table class="table table-hover">
		<h2>
		<tr>
		<td>Ranked Wins </td><td>Ranked Losses</td><td>Tier</td><TD>Division</TD>
		<tr>
	
			<td id="lwin"><?php echo $results['playerStatSummaries']['8']['wins']; ?></td>
			<td class="llose"><?php echo $results['playerStatSummaries']['8']['losses']; ?></td>
			<td class="lwin"><?php echo $results2['26360623']['0']['tier']; ?></td>
			<td class="lwin"><?php echo $results2['26360623']['0']['entries']['0']['division']; ?></td>
	</table>
	</div>
	<?php 

?>
<?php
// Prints Fatals wins and loses
$results= $test->getStats($fatalraven);
$results2=$test->getLeague($fatalraven, "entry");


	?>
	<div class="fatalraven">
	<h1>Kareem"Fatalraven"</h1>
	<img src="gnar.jpg" alt="..." class="img-circle">
	<table class="table table-hover">
	<h2>
	<tr>
		<td>Ranked Wins</td><td>Ranked Loses</td><td>Tier</td><TD>Division</TD>
	</tr>

	<tr>
		<td><?php echo $results['playerStatSummaries']['9']['wins']; ?></td>
		<td><?php echo $results['playerStatSummaries']['9']['losses']; ?></td>
		<td class="lwin"><?php echo $results2['23071393']['0']['tier']; ?></td>
			<td class="lwin"><?php echo $results2['23071393']['0']['entries']['0']['division']; ?></td>
	</tr>
	</h2>
	</table>
	</div>
	<?php 

?>
<?php
// Prints natrixdreams
$results= $test->getStats($natrixdream);
$results2=$test->getLeague($natrixdream, "entry");


	?>
	<div class="natrix">
	<h1>Akilah"NatrixDream"</h1>
	<img src="lucian.jpg" alt="..." class="img-circle">
	<table class="table table-hover">
	<h2>
	<tr>
		<td>Ranked Wins</td><td>Ranked Loses</td><td>Tier</td><TD>Division</TD>
	</tr>

	<tr>
		<td id="stuff"><?php echo $results['playerStatSummaries']['8']['wins']; ?></td>
		<td><?php echo $results['playerStatSummaries']['8']['losses']; ?></td>
		<td class="lwin"><?php echo $results2['25331321']['0']['tier']; ?></td>
		<td class="lwin"><?php echo $results2['25331321']['0']['entries']['0']['division']; ?></td>
	</tr>
		<?php 
			
			$natrixwins = $results['playerStatSummaries']['8']['wins'];
			$natrixlosses =$results['playerStatSummaries']['8']['losses'];
			$fatalwins =$results['playerStatSummaries']['9']['wins'];
			$fatallosses=$results['playerStatSummaries']['9']['losses'];
			$luciwins =$results['playerStatSummaries']['8']['wins'];
			$lucilosses=$results['playerStatSummaries']['8']['losses'];
			$allwins = [$natrixwins,$fatalwins,$luciwins];
			
			$setNatrixWins= $luciwins-1;
			$setFatalWins= $fatalwins-1;
			$setLuciWins= $luciwins -1;
			$allSetWins = [$setNatrixWins,$setFatalWins,$setLuciWins]; 
			
			
			require('yo.php');
				
				// Get an API Key at dev.justyo.co
				$apiKey = '97bc8528-4e7b-8935-5dff-1f5d5c615749';

				// Instanciate
				/*$yo = new Yo($apiKey);
				for($i = 0;$i<2;$i++){
					
						if($allwins[$i]){ 
						$yo->user('Kareemdasilva');
						}
					
			}*/


				
				
				
		?>
	</h2>
	</table>
	</div>
</div>
<script>
	</script>
</body>
</html>
