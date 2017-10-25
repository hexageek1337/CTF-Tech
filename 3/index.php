<?php
session_start();
error_log(0);
error_reporting(0);

if (isset($_GET['soal'])) {
	if ($_SESSION['ctftechstart'] == 'ctftechmulai' AND empty($_SESSION['ctftech_level3'])) {
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
				<div class="child bg-one" title="Level 3 - CTF Technology">
				</div>
			</div>
			<h1>Problema Programming - Soal 3</h1>
			<p>Ada sebuah situs blog yang memberikan informasi-informasi suatu teknologi , dan pada salah satu artikel nya kami menemukan tanda-tanda curiga terhadap gambar tersebut . Mungkin anda dapat memecahkan kecurigaan kami terhadap gambar tersebut , Terima Kasih.</p>
			<pre class="prettyprint lang-php">
&lt;?php
// NameLeaks

if ($_GET["solusi"] != "benar") {
	echo "Solusi di temukan";
	header("Location: http://www.google.com/");
} else {
	# Awesome i like it

	echo "
	&lt;!DOCTYPE html&gt;
	&lt;html&gt;
	&lt;head&gt;
		&lt;title&gt;CTF Tech&lt;/title&gt;
	&lt;/head&gt;
	&lt;body&gt;
	&lt;p&gt;Click the button to display a time-based greeting:&lt;/p&gt;

	&lt;button onclick="CtFTechFunction()"&gt;Try it&lt;/button&gt;
	&lt;p id="demo">&lt;/p&gt;
	&lt;form action="" method="post"&gt;
		&lt;button type="submit" name="f"&gt;Mulai&lt;/button&gt;
	&lt;/form&gt;
	&lt;script type="text/javascript"&gt;
		function cTFTechFunction() {
		    var hour = new Date().getHour(); 
		    var greeting;
		    if (hour < 15) {
		        greeting = "Good day for you!";
		    } else {
		        greeting = "Good evening for you";
		    }
		    document.getElementById("demo").innerHTML = greeting;
		}
	&lt;/script&gt;
	&lt;/body&gt;
	&lt;/html&gt;
	";
}

?&gt;</pre><br>
			<a href="../3/"><button type="submit">Kembali</button></a>
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
			alert("Anda sudah menyelesaikan soal level 3");
			window.location.href = "../4/";
		</script>';
	}
} else {
	if ($_SESSION['ctftech_level3'] == 'CTFTECH{j4v45r1pt}') {
		echo '
		<script type="text/javascript">
			alert("Anda sudah menyelesaikan CTF Tech Level 3");
			window.location.href = "../4/";
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
			if ($heang == 'CTFTECH{j4v45r1pt}') {
				$_SESSION['ctftech_level3'] = $heang;
				echo '
				<script type="text/javascript">
					alert("Selamat anda berhasil menyelesaikan CTF Tech Level 3");
					window.location.href = "../4/";
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
				<a href="?soal" title="Baca Soal !"><h1>CTF Tech - Level 3</h1></a>
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