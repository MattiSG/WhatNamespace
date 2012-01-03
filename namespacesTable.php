<?php
	require_once('lib/jsonwrapper.php');
	
	$data = json_load_file('data/namespaces.json', __FILE__);
	
	
	foreach ($data as $dialect => $entry) {
		echo '<tr>';
		echo '<th>' . $dialect . '</th>';
		printCellFrom('ns', $entry);
		printCellFrom('doc', $entry);
		echo '</tr>';
	}
	
	function printCellFrom($member, $data) {
		echo '<td class="' . $member . '">' . $data[$member] . '</td>';
	}
?>