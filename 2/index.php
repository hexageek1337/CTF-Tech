<?php
session_start();
error_log(0);
error_reporting(0);

if (isset($_GET['soal'])) {
	if ($_SESSION['ctftechstart'] == 'ctftechmulai' AND empty($_SESSION['ctftech_level2'])) {
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
				<div class="child bg-one" title="Level 2 - CTF Technology">
				</div>
			</div>
			<h1>Stegnography Logic - Soal 2</h1>
			<p>Ada sebuah website yang di buat dengan sebuah PHP Framework , Dan pastinya di butuhkan juga Framework CSS untuk mempercantik websitenya tersebut . Namun masalahnya mereka menemukan kejanggalan terhadap sebuah gambar yang terdapat di CSS Frameworknya tersebut . Dan merekapun menduga dalam gambar tersebut ada mengandung teks berencode str_rot13 - gzinflate - base64 , namun mereka tidak mengerti hasil decode nya tersebut ternyata hasil decode nya pun berbentuk encode juga . Mungkin anda bisa menebak nya untuk membantu mereka menyelesaikan permasalahan tersebut .</p>
			<a href="../2/"><button type="submit">Kembali</button></a>
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
			alert("Anda sudah menyelesaikan soal level 2");
			window.location.href = "../3/";
		</script>';
	}
} else {
	if ($_SESSION['ctftech_level2'] == 'CTFTECH{E4sy_f0r_c55}') {
		echo '
		<script type="text/javascript">
			alert("Anda sudah menyelesaikan CTF Tech Level 2");
			window.location.href = "../3/";
		</script>
		';
	} elseif (empty($_SESSION['ctftechstart'])) {
		echo '
		<script type="text/javascript">
			alert("Anda belum memulai CTF");
			window.location.href = "../";
		</script>
		';
	} else {
		if (isset($_POST['heangsubmit'])) {
			$heang = $_POST['heangflag'];
			if ($heang == 'CTFTECH{E4sy_f0r_c55}') {
				$_SESSION['ctftech_level2'] = $heang;
				echo '
				<script type="text/javascript">
					alert("Selamat anda telah menyelesaikan CTF Tech Level 2");
					window.location.href = "../3/";
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
				<a href="?soal" title="Baca Soal !"><h1>CTF Tech - Level 2</h1></a>
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