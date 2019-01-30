<!DOCTYPE HTML>  
<html>
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
              <li><a href="">indice</a></li>
              <li><a href="insertar.php">insertar  </a></li>
			   <li><a href="mostrar1.php">Mostrar 1</a></li>
			    <li><a href="mostrar 2.php">Mostrar 2</a></li>
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
		<form name="formulari1" method="get" action="insert.php">
			Nombre: <input type="text" name="nom" value="">
			Web: <input type="text" name="web" value="">
			Escudo: <input type="text" name="escut" value="">
			<input type="submit" value="INSERTAR">
		</form>

      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
  </body>
	
	
</html>