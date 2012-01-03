<?php
function json_load_file($file, $path = null) {
	$result = json_decode(file_get_contents(($path == null ? '' : dirname($path) . '/') . $file), true);
	if ($result == null)
		die("<b>Fatal Error</b>: JSON file \"$file\" is invalid.");
	return $result;
}

function json_write_file($data, $file) {
	if (file_put_contents($file, json_encode($data)) === false)
		die("<b>Fatal Error</b>: unable to write to \"$file\".");
}
?>
