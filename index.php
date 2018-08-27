<!DOCTYPE html>
	<html>

		<head>
			<meta charset="utf-8">
			<title>Pokemon</title>
		</head>

		<body>

			<?php
			ini_set('display_errors', 1);

			require ('Pokemon.class.php');
			require ('Feunnec.class.php');
			require ('Grenousse.class.php');
			require ('Marisson.class.php');

			echo "hello";

			$marisson = new Marisson();
			$feunnec = new Feunnec();
			$grenousse = new Grenousse();

			// echo '<table><thead><th>' . $marisson->carte . '</th><th>' . $feunnec->carte . '</th><th>' . $grenousse->carte . '</th></thead></table>';

			echo($marisson);

			

?>








		</body>

	</html>