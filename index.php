<!DOCTYPE html>
	<html>

		<head>
			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="style.css">
			<title>Pokemon</title>
		</head>

		<body>

			<?php
			ini_set('display_errors', 1);

			require ('Pokemon.class.php');
			require ('Feunnec.class.php');
			require ('Grenousse.class.php');
			require ('Marisson.class.php');
			

			$marisson = new Marisson(0);
			$feunnec = new Feunnec(0);
			$grenousse = new Grenousse(0);

			echo "<h2>JEU POKEMON</h2>";
			echo "<h3>Cartes Disponibles</h3>";

			
			$marisson->getParams();
			$feunnec->getParams();
			$grenousse->getParams();


			echo "<div id= 'tab'>";

			echo "<table>
				<tr><td><button>". $marisson->carte. "</button></td></tr>" .
        		"<tr><td>". $marisson->attaque1 . "</td></tr>".
        		"<tr><td>" . $marisson->attaque2 . "</td></tr>
        		</table>";
        		
        

        	echo "<table>
        		<tr><td><button>". $feunnec->carte. "</button></td></tr>".
        		"<tr><td>" . $feunnec->attaque1 . "</td></tr>".
        		"<tr><td>" . $feunnec->attaque2 . "</td></tr>
        		</table>";
        		
        		


        	echo "<table>
        		<tr><td><button>". $grenousse->carte. "</button></td></tr>".
        		 "<tr><td>" . $grenousse->attaque1 . "</td></tr>".
        		 "<tr><td>" . $grenousse->attaque2 . "</td></tr>
        		 </table>";

        		
        		"</div>";


        		

?>








		</body>

	</html>