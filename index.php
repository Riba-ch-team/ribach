<?php 
	require_once 'config.php';
	
	$data = $db->query("SELECT * FROM board");
?>

<html>
	<head>
		<title>RIBA'CH SOURCED EDITION</title>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
		<link rel="stylesheet" href="css.css">
	</head>
	<body>
		<center>
			<h1>RIBA'CH</h1>
			<p>Имеджборд от <a href="https://t.me/mitufan">митуфана</a> который собран из <a href="https://github.com/Riba-ch-team/ribach">исходников</a></p>			
		</center>
		
		<h2 align="center">Темы: </h2>
		<div class="block">
			<?php 
				while($boards = $data->fetch(PDO::FETCH_ASSOC)){
					echo('<a href="board.php?id=' .$boards['id']. '">' .$boards['name']. ' (' .$db->query("SELECT * FROM posts WHERE board = " .$boards['id'])->rowCount(). ')</a><br>');
				}
			?>
			<p>Всего постов на сайте: <?php echo($db->query("SELECT * FROM posts")->rowCount()); ?></p>
		</div>
	</body>
</html>
