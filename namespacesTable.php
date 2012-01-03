<?php
	require_once('jsonwrapper.php');
	
	$data = json_load_file('namespaces.json');
	
	
	foreach ($data as $dialect => $ns) {
		echo '<tr>';
		echo '<th>' . $dialect . '</th>';
		echo '<td>' . $ns . '</td>';
		echo '<td>TODO</td>';
		echo '</tr>';
	}
?>