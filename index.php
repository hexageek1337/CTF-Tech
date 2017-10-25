<?php
session_start();
error_log(0);
error_reporting(0);

if ($_SESSION['ctftechstart'] == 'ctftechmulai') {
	echo '
	<script type="text/javascript">
		alert("CTF Tech Sudah Anda Mulai !");
		window.location.href = "1/";
	</script>
	';
} else {
	$mulaigan = $_POST['mulaictf'];
	echo '
<!DOCTYPE html>
<html>
<head>
	<title>CTF Tech</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
</head>
<body>
<div class="form">
	<h1>CTF Technology</h1>
	<p>Adalah sebuah media pembelajaran sekaligus menguji skills dalam menjalankan atau menyelesaikan masalah pada Teknologi , CTF ini di selenggarakan oleh pribadi seseorang yakni Denny Septian . Semoga dengan adanya CTF ini anda mendapatkan ilmu dan tantangan baru , Terima Kasih !</p>
	<form action="" method="post">
		<input type="hidden" name="heangmulai" value="ctftechmulai">
		<button type="submit" name="mulaictf">Mulai</button>
	</form>
';

	if (isset($mulaigan)) {
		$heang = $_POST['heangmulai'];
		if ($heang == 'ctftechmulai') {
			$_SESSION['ctftechstart'] = $heang;
			echo '
			<script type="text/javascript">
				alert("CTF Tech akan di mulai !");
				window.location.href = "1/";
			</script>
			';
		} else {
			echo '
			<!DOCTYPE html>
			<html>
			<head>
				<title>CTF Tech</title>
			<link rel="stylesheet" type="text/css" href="css/style.css">
			<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
			</head>
			<body>
			<div class="form">
				<h1>CTF Technology</h1>
				<p>Adalah sebuah media pembelajaran sekaligus menguji skills dalam menjalankan atau menyelesaikan masalah pada Teknologi , CTF ini di selenggarakan oleh pribadi seseorang yakni Denny Septian . Semoga dengan adanya CTF ini anda mendapatkan ilmu dan tantangan baru , Terima Kasih !</p>
				<form action="" method="post">
					<input type="hidden" name="heangmulai" value="ctftechmulai">
					<button type="submit" name="mulaictf">Mulai</button>
				</form>';
		}
	}
}

?>