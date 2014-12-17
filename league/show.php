<?php
include('riot.php');
//testing classes
$summoner_name = 'RiotSchmick';
$summoner_id = 25331321;

$test = new riotapi('na');
//$r = $test->getSummonerByName($summoner_name);
//$r = $test->getSummoner($summoner_id);
//$r = $test->getSummoner($summoner_id,'masteries');
//$r = $test->getSummoner($summoner_id,'runes');
//$r = $test->getSummoner($summoner_id,'name');
$r = $test->getLeague($summoner_id, "entry");
//$r = $test->getStats($summoner_id);
//$r = $test->getTeam($summoner_id);
//$r = $test->getLeague($summoner_id);
//$r = $test->getGame($summoner_id);





?>
<pre>
	<?php
	print_r($r);
	?>
</pre>
<td class="lwin"><?php echo $r['games']['0']['stats']['wardPlaced']; ?></td>
<td class="lwin"><?php echo $r['23071393']['0']['entries']['0']['division']; ?></td>