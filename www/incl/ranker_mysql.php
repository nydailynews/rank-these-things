<?php

/*******************************************************************************
file: ranker.php
project: Ranker [scandal ranker]
date: May 2013
author: P. Bustamante

overview: captures users ranked selections and inserts them into data table. retrieves full results and outputs to rankResults div.

*******************************************************************************/
		
// * ASSUMES CONNECTION IS ESTABLISHED AND THIS FILE IS BEING INCLUDED
// BY ANOTHER PHP FILE THAT CONNECTS TO THE DB.
// I KNOW THAT mysql_query IS OOOOOLD BUT I'M NOT UPGRADING THE SERVER SORRY NOT SORRY

if ( isset($_GET['ranking']) ):

	## capture variables from the URL
	$ranker_id = intval($ranker_id);
	$rankingsAll = htmlspecialchars($_GET['ranking']);
	$rankList = explode("|", $rankingsAll);
	$item_prefix = 'item-';

	$len = count($rankList);
	
	// Update the score of the individual items
	for ($i = 0; $i < $len; $i++):
		$id = intval(str_replace($item_prefix, '', $rankList[$i]));
		$sql = "UPDATE ranker_items
					SET	rank_total = rank_total + ($len - $i)
					WHERE id = $id LIMIT 1";
		$results = @mysql_query($sql);
    endfor;

	// Update the parent table
	$sql = 'UPDATE ranker SET finishes = finishes + 1
				WHERE id = ' . $ranker_id . ' LIMIT 1';
	$results = @mysql_query($sql);

	// Query the db for the new order of the ranked items.
	$sql = 'SELECT * from ranker_items
			WHERE ranker_id = ' . $ranker_id . '
			ORDER BY rank_total DESC';
	$results = mysql_query($sql);
	while ( $rankings[]=mysql_fetch_assoc($results) );
	

$rlen = count($rankings);
for ($i = 0; $i < $rlen-1; $i++):
    $userrank = array_search($item_prefix . $rankings[$i]['id'], $rankList);
?>
    <div class="dragger"><p><?php echo $i+1 ?>. <?php echo str_replace('\\', '', $rankings[$i]['title']); ?><span class="urank">You said: <?php echo $userrank+1; ?></span></p></div>
					
<?php endfor;
endif;
