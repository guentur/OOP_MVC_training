<?php
foreach ($byRange as $value) {
	echo '<h2>' . $value['id'] . '</h2>';
	echo '<h2>' . $value['title'] . '</h2>';
	echo '<h4>' . $value['description'] . '</h4>';
}
?>