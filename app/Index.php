<html>
	<head>
		<title>Projet docker</title>
	</head>
	<body>
		<h1>Les utilisateurs:</h1>
		<?php
			try {
				$dbh = new PDO('mysql:host=db;dbname=siteWeb', 'root', 'root' );
				
				}
			
				catch(Exception $e)
				{
					// En cas d'erreur, on affiche un message et on arrête tout
						die('Erreur : '.$e->getMessage());
				}
			
			$users = $dbh->query('SELECT * FROM user');

			$data = $users->fetch();


			echo "<table border='1'>
			<tr>
			<th>id</th>
			<th>pseudo</th>
			<th>nom</th>
			<th>prenom</th>
			</tr>";


			while ($data = $users->fetch())
			{
				echo "<tr>";
				echo "<td>" . $data['id'] . "</td>";
				echo "<td>" . $data['pseudo'] . "</td>";
				echo "<td>" . $data['nom'] . "</td>";
				echo "<td>" . $data['prenom'] . "</td>";
				echo "</tr>";
			}
			echo "</table>";

			$users->closeCursor();


		?>
	</body>
</html>
