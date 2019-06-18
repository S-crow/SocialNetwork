		<html>
		<head>
			<title>Bienvenue sur le réseau social</title>
			<link rel="stylesheet" href="style.css">
		</head>
		<body>
        <?php
		$pdo = new PDO("mysql:host=localhost:8889;dbname=mydb", "root", "root");
		if(isset($_POST['pseudo']) && isset($_POST['passwd'])) {
            $pseudo = $_POST["pseudo"];
            $req = "SELECT passwd from users where pseudo='".$pseudo."'";
            $passbase = $pdo->query($req)->fetch();
            $passbase = $passbase[0];
            var_dump($passbase);
			$passEntered = $_POST["passwd"];
			if ($passEntered == $passbase) {
				echo "success";
				setCookie("user", $pseudo);
				header("Location: profile.php?pseudo=".$pseudo);
			}
		} 
		if(isset($_POST['newpseudo']) && isset($_POST['newpasswd'])) {
			$valeurs = ["pseudo" => $_POST["newpseudo"], "passwd" => $_POST["newpasswd"]];
			$req = "INSERT INTO users (pseudo, passwd) VALUES (:pseudo, :passwd)";
			$req = $pdo->prepare($req);
			$req->execute($valeurs);
		} 
		?>
		<h1>Réseau social Sl-hack</h1>
		<p>Connectez vous</p>
		<form method="post" action="index.php">
		<input type="text" name="pseudo" value="" />
		<input type="password" name="passwd" value="" />
		<input type="submit" name="submit" value="Se connecter" />
		</form>
		<p>Inscrivez vous</p>
		<form method="post" action="index.php">
		<input type="text" name="newpseudo" placeholder="Choisissez un pseudo" value="" />
		<input type="password" name="newpasswd" value="" />
		<input type="submit" name="submit" value="Créer un compte" />
		</form>
		</body>
		</html>