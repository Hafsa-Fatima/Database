<?php
		$conn = oci_connect('scott', 'tiger', 'localhost/hxf7654', 'AL32UTF8');
		if (!$conn) {
			$e = oci_error();
			trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
		}
		Else echo "connection   successful";
	?>

