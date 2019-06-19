		<html>
		<head>
		<title>Page de profil</title>
		<link rel="stylesheet" href="style.css">
		</head>
		<body>
		<p>Page de profil</p>
		<?php
		//initialisation PDO
		$pdo = new PDO("mysql:host=localhost;dbname=mabasedb", "Scrow", "Scrow");
		//insertion du message 
		if(isset($_POST["newmessage"])) {
		    $valeurs = ["pseudo" => $_COOKIE["user"], "message" => $_POST["newmessage"]];
		    $req = "INSERT INTO messages (pseudo, message) VALUES (:pseudo, :message)";
		    $req = $pdo->prepare($req);
		    $req->execute($valeurs);
		}

		//on liste les messages
		if(isset($_GET["pseudo"])) {
		$req = $pdo->query("select * from messages where pseudo = '".$_GET["pseudo"]."'");
		echo 'Liste des messages du membre: '.$_GET['pseudo'].'<br><br/>';
		while ($res = $req->fetch()) {
		    echo $res["message"]."</br>";
		}
		}
		if (isset($_COOKIE["user"])) {
		    ?>
		    Votre pseudo : <?php echo $_COOKIE["user"] ?><br/><br/>
		    <form method="post" action="">
		        <input type="text" name="newmessage" placeholder="Ecrivez un message" value="" />
		        <input type="submit" name="submit" value="Publier" />
		    </form>
		    <?php
		    }
		?>
		</body>
		</html>
