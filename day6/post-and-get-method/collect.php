<?php

if (!empty($_POST['data'])) {
	echo 'The following string was sent from form #1: ' . $_POST['data'];
} elseif (!empty($_GET['data'])) {
	echo 'The following string was sent from form #2: ' . $_GET['data'];
}

?>