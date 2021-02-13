<?php
include '../includes/conn.php';
$dir = 'page/';
if (isset($_GET['p'])) {
	$page = $_GET['p'];
	switch ($page) {
		case 'dashboard':
			include $dir . 'dashboard.php';
			break;
		case 'delete':
			include $dir . 'delete.php';
			break;
		case 'c1':
			include $dir . 'c1.php';
			break;
		case 'c2':
			include $dir . 'c2.php';
			break;
		case 'c3':
			include $dir . 'c3.php';
			break;
		case 'c4':
			include $dir . 'c4.php';
			break;
		case 'c5':
			include $dir . 'c5.php';
			break;
		case 'c6':
			include $dir . 'c6.php';
			break;
		case 'c7':
			include $dir . 'c7.php';
			break;
		case 'c8':
			include $dir . 'c8.php';
			break;
		case 'c9':
			include $dir . 'c9.php';
			break;
		case 'profile':
			include $dir . 'profile.php';
			break;
		default:
			include $dir . 'blank.php';
			break;
	}
} else {
	include $dir . 'dashboard.php';
}
