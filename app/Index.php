<html>
	<head>
		<link rel="stylesheet" href="css/style.css" />
		<title>Projet docker</title>
	</head>
	<body>
		<?php
			if($_POST['mdp'] != null && $_POST['pseudo'] != null && $_POST['nom'] != null && $_POST['prenom']){
				$pdo = new PDO('mysql:host=db;dbname=siteWeb', 'root', 'root' );
				$id = $pdo->query('select max(id) from user');
				$data = $id->fetch();
				$idI = (int)$data[0] + 1;
				$sql = "INSERT INTO user VALUES (?,?,?,?,md5(?))";
				$pdo->prepare($sql)->execute([$idI,$_POST['pseudo'],$_POST['nom'],$_POST['prenom'],$_POST['mdp']]);
			}
		?>
		<?php
			try{
				$dbh = new PDO('mysql:host=db;dbname=siteWeb', 'root', 'root' );
			}
			catch(Exception $e){
				die('Erreur : '.$e->getMessage());
			}
			$users = $dbh->query('SELECT * FROM user');
			$data = $users->fetch();
		?>
		<table>
			<caption>Liste des utilisateurs</caption>
  			<thead>
    				<tr>
	      				<th>Id</th>
      					<th>Pseudo</th>
					<th>Nom</th>
     					<th>Prenom</th>
   			 	</tr>
  			</thead>
			<tbody>
		<?php
			while ($data = $users->fetch()){
				echo "<tr>";
				echo "<td>" . $data['id'] . "</td>";
				echo "<td>" . $data['pseudo'] . "</td>";
				echo "<td>" . $data['nom'] . "</td>";
				echo "<td>" . $data['prenom'] . "</td>";
				echo "</tr>";
			}
			$users->closeCursor();
		?>
		</tbody>
		</table>
		<div class="wrap">
  			<a href	="form.php" class="button">Inscription</a>
		</div>
	</body>
</html>
