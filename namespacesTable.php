<?php
	require_once('lib/jsonwrapper.php');
	
	$data = json_load_file('data/namespaces.json', __FILE__);
	
	
	foreach ($data as $dialect => $ns) {
		echo '<tr>';
		echo '<th>' . $dialect . '</th>';
		echo '<td>' . $ns . '</td>';
		echo '<td>TODO</td>';
		echo '</tr>';
	}
?>