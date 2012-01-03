<?php
	require_once('lib/jsonwrapper.php');
	
	$data = json_load_file('data/namespaces.json', __FILE__);
	
	
	foreach ($data as $dialect => $entry) {
		echo '<tr>';
		
		echo '<th>'
			 . $dialect . ' '
			 . '<a class="doc" href="' . $entry['doc'] . '" '
			 . 'title="Documentation for' . $dialect . '">'
			 . '(doc)</a>'
			 . '</th>';
			 
		echo '<td class="ns"><input type="text" readonly="readonly" value="' . $entry['ns'] . '"></input></td>';
		echo '</tr>';
	}
?>
