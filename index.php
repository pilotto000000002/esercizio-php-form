<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title></title>
  </head>
  <body>
    <h1></h1>
    <p>ecco un paragrafo</p>
    	
   

	<?php 

	  $nome = (isset($_POST['nome'])) ? $_['nome'] : '';
	  $cognome = (isset($_POST['cognome'])) ? $_['cognome'] : '';
	  $indirizzo = (isset($_POST['indirizzo'])) ? $_['indirizzo'] : '';
	?>

	<body>
	  <div class="countainer">
	 	<div class="alert alert-primary" role="alert">
	 	  <?php  
	 	  foreach ($_POST as $key => $value) {
	 	  print $key . ':' . $value . '<br>';
	 	  }
	 	  ?>
	 	</div>

	  <?php if ($nome): ?>
	  
	  <p>condizione vera</p>

	  <?php else: ?>
	  
	  <p>condizione falsa</p>

	  <?php endif; ?>	
	 

	 <form> 	
	  
	  <div class="form-group">
   			 <label for="nome">Nome</label>
    			<input type="text" class="form-control" id="nome" " placeholder="Inserisci il tuo nome">
 		 </div>
  		
  		 <div class="form-group">
   			 <label for="cognome">Cognome</label>
    			<input type="text" class="form-control" id="cognome"  placeholder="Inserisci il tuo cognome">
 		 </div>
 		 <div class="form-group">
   			 <label for="indirizzo">Indirizzo</label>
    			<input type="text" class="form-control" id="indirizzo" rows="5"></textarea>
 		 </div>
 		 	<button type="submit" class="btn btn-primary">invia</button>
      </form>
	
	</body>  		
	  	
	  	
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>