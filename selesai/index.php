<?php
session_start();
error_log(0);
error_reporting(0);

if ($_SESSION['ctftechstart'] == 'ctftechmulai' AND $_SESSION['ctftech_level1'] == 'CTFTECH{h3an9}' AND $_SESSION['ctftech_level2'] == 'CTFTECH{E4sy_f0r_c55}' AND $_SESSION['ctftech_level3'] == 'CTFTECH{j4v45r1pt}' AND $_SESSION['ctftech_level4'] == 'CTFTECH{1nn0db}' AND $_SESSION['ctftech_level5'] == 'CTFTECH{p05tgr3}' AND $_SESSION['ctftech_level6'] == 'CTFTECH{E4sy_f0r_h4tm1}' AND $_SESSION['ctftech_level7'] == 'CTFTECH{E4sy_f0r_m4r14d3}' AND $_SESSION['ctftech_level8'] == 'CTFTECH{c3pp_php}' AND $_SESSION['ctftech_level9'] == 'CTFTECH{3u11sh1t_fr4m3w0rk}' AND $_SESSION['ctftech_level10'] == 'CTFTECH{1n_y0ur_dr34m}') {
	echo '
	<script type="text/javascript">
		alert("Terima Kasih Anda Sudah Berpartisipasi di CTF Tech");
	</script>';
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
		<a href="logout.php"><button type="submit">Logout</button></a>
	</div>
	</body>
	</html>';
} else {
	echo '
	<script type="text/javascript">
		alert("CTF Tech Belum di Mulai atau Anda Belum Menyelesaikan Semua Soal CTF Tech");
		window.location.href = "../";
	</script>';
}

?>