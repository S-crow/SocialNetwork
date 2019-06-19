			<html>
			<head>
				<title>Liste des utilisateurs</title>
				<link rel="stylesheet" href="style.css">
			</head>
			<body>
			<p>Liste des différents membres</p>
			<?php
				$pdo = new PDO("mysql:host=localhost;dbname=mabasedb", "Scrow", "Scrow");
				$req = $pdo->query("select * from users");
				
				while ($res = $req->fetch()) {
					echo $res["pseudo"]."</br>";
				}
			?>
			</body>
			</html>
		
