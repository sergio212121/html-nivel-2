<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

    <title>Navbar Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/navbar.css" rel="stylesheet">
	
	

  </head>

  <body>

    <div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.html">aplicaciones WEB</a></li>
			   <li><a href="mostrar1.php">Mostrar 1</a></li>
			    <li><a href="mostrar 2.php">Mostrar 2</a></li>
				<li><a href="insertar.php">insertar  </a></li>
				 <li><a href="modificar.php"> Modificar </a></li>
				  <li><a href="eliminar.php">Eliminar </a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
				<span class="caret"></span></a>
                
              </li>
            </ul>
            
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

	  
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>lista de EQUIPS</h1>
		<?php
			$servidor = "localhost";
			$usuari = "root";
			$password = "";
			$db = "futbol";

			// Create connection
			$conn = new mysqli($servidor, $usuari, $password, $db);
			
			// Check connection
			if ($conn->connect_error) {
				die("Connexió KO: " . $conn->connect_error);
			} 
			else {

				$sql = "SELECT nom, localitat, web, escut FROM equips";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					echo "<table class=\"table table-striped\">";
					echo "<tr><td>Nom</td><td>Localitat</td><td>Web</td><td>escut</td></tr>";
					while($rows = $result->fetch_assoc()) {
						echo "<tr><td>".$rows['nom'] . "</td> <td>" . $rows['localitat'] . "</td><td><a ref=\"". $rows['web'] ."\"> " . $rows['web'] . "</td><td><img src=\"". $rows['escut'] ."\">" . "</td></tr>";
					}
					echo "</table>";
				} else {
					echo "0 registres";
				}
				$conn->close();
			}
		?>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  
  </body>
</html>
