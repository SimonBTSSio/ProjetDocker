<html>
	<head>
	</head>
	<body>
	<?php
	try {
	    $dbh = new PDO('mysql:host=db;dbname=siteWeb', 'root', 'root');
	    foreach($dbh->query('SELECT * from user') as $row) {
		print_r($row);
	    }
	    $dbh = null;
	} catch (PDOException $e) {
	    print "Erreur !: " . $e->getMessage() . "<br/>";
	    die();
	}
	?>

	</body>
</html>
