<?php
	require_once('lib/jsonwrapper.php');
	
	$data = json_load_file('data/namespaces.json', __FILE__);
	
	ksort($data);
	
	foreach ($data as $dialect => $entry) {
		echo '<tr>';
		
		echo '<th>'
			 . $dialect
			 . '</th>';
			 
		echo '<td class="ns"><input type="text" readonly="readonly" value="' . $entry['ns'] . '"></input></td>';
		
		echo '<td class="doc"><a href="' . $entry['doc'] . '" '
			 . 'title="Documentation for' . $dialect . '" target="_blank">'
			 . '&rarr;</a></td>';

		echo '</tr>';
	}
?>
