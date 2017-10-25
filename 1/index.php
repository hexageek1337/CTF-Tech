<?php
session_start();
error_log(0);
error_reporting(0);

if (isset($_GET['soal'])) {
	if ($_SESSION['ctftechstart'] == 'ctftechmulai' AND empty($_SESSION['ctftech_level1'])) {
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
			<div class="parent" onclick="">
				<div class="child bg-one" title="Level 1 - CTF Technology">
				</div>
			</div>
			<h1>Steganography Simple - Soal 1</h1>
			<p>Ada sebuah situs blog yang memberikan informasi-informasi suatu teknologi , dan pada salah satu artikel nya kami menemukan tanda-tanda curiga terhadap gambar tersebut . Mungkin anda dapat memecahkan kecurigaan kami terhadap gambar tersebut , Terima Kasih.</p>
			<a href="../1/"><button type="submit">Kembali</button></a>
		</div>
		</body>
		</html>';
	} elseif (empty($_SESSION['ctftechstart'])) {
		echo '
		<script type="text/javascript">
			alert("CTF Tech Belum di Mulai");
			window.location.href = "../";
		</script>';
	} else {
		echo '
		<script type="text/javascript">
			alert("Anda sudah menyelesaikan soal level 1");
			window.location.href = "../2/";
		</script>';
	}
} else {
	if ($_SESSION['ctftech_level1'] == 'CTFTECH{h3an9}') {
		echo '
		<script type="text/javascript">
			alert("Anda sudah menyelesaikan CTF Tech Level 1");
			window.location.href = "../2/";
		</script>
		';
	} elseif (empty($_SESSION['ctftechstart'])) {
		echo '
		<script type="text/javascript">
			alert("Anda belum memulai CTF");
			window.location.href = "../ctf/";
		</script>
		';
	} else {
		if (isset($_POST['heangsubmit'])) {
			$heang = $_POST['heangflag'];
			if ($heang == 'CTFTECH{h3an9}') {
				$_SESSION['ctftech_level1'] = $heang;
				echo '
				<script type="text/javascript">
					alert("Selamat anda telah menyelesaikan CTF Tech Level 1");
					window.location.href = "../2/";
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
					<a href="?soal" title="Baca Soal !"><h1>Salah !</h1></a>
					<form action="" method="post">
						Input your Flag : <input type="text" name="heangflag" placeholder="CTFTECH{y0ur_fl49}">
						<input type="submit" name="heangsubmit" value="Submit">
					</form>
				</div>
				</body>
				</html>';
			}
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
				<a href="?soal" title="Baca Soal !"><h1>CTF Tech - Level 1</h1></a>
				<form action="" method="post">
					Input your Flag : <input type="text" name="heangflag" placeholder="CTFTECH{y0ur_fl49}">
					<input type="submit" name="heangsubmit" value="Submit">
				</form>
			</div>
			</body>
			</html>';
		}
	}
}

?>