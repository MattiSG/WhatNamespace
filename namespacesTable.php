<?php
	require_once('lib/jsonwrapper.php');
	
	
	foreach (glob('data/*.json') as $filename)
		printCategory($filename);
	
	
	
	function printCategory($filename) {
		$data = json_load_file($filename, __FILE__);
		
		echo '<tr class="category"><th colspan="3">' . $data['category'] . '</th></tr>';
		
		$data = $data['content'];
		
		ksort($data);
		
		foreach ($data as $dialect => $entry) {

			$shortName = '';

			if (array_key_exists('short', $entry))
				$shortName = $entry['short'];
			else
				$shortName = strtolower($dialect);
			
		
			echo '<tr class="entry">';
			
			echo '<th id="' . $shortName . '">'
				 . $dialect
				 . '</th>';
				 
			echo '<!--googleoff: snippet-->';
			echo '<td class="ns"><input type="text" value="' . $entry['ns'] . '"></input></td>';
			
			echo '<td class="doc">';
			if (isset($entry['doc'])) {
				echo '<a href="' . $entry['doc'] . '" '
				 . 'title="Documentation for' . $dialect . '" target="_blank">'
				 . '&rarr;</a>';
			}
			echo '</td>';
	
			echo '<!--googleon: snippet-->';
	
			echo '</tr>';
		}
	}
?>
