<html>
	<head> 
		<title>Лабораторная работа №4</title>
		<meta charset="utf-8">
		<link href="./styles.css" type="text/css" rel="stylesheet">
	</head>
	<body style="background:#d3feab; color:#149414">
		<center><div id="lab_title">
			Лабораторная работа №4
		</div></center>
		<br><br>
		<center>Lorem ipsum</center><br>
	<form action="script.php?action=save" method="post">
    <?php 
    	$filename = "./resource.txt";
		$handle = fopen($filename, "r");
		$contents = filesize($filename) > 0 ? fread($handle, filesize($filename)) : ""; 
		echo "<textarea type='text' name = 'krya' reqired>$contents</textarea>";
	?>
        <br>
        <button type="submit">Сохранить</button>
    </form>

	</body>
</html>