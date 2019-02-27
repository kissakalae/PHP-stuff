
<!DOCTYPE html>
<html>

/* 
dbusername: azure
dbpassword: 6#vWHD_$
Host information: 127.0.0.1:50361
*/

<?php
	
	$servername = "127.0.0.1:50361";
	$username = "azure";
	$password = "6#vWHD_$";
	$dbname = "localdb";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} else {
	echo "Connected successfully";
	}
	
	$sql = "SELECT * FROM asiakas;";
		
	$result = $conn->query($sql);
	
	function tulokset() {
		
        while($row = $result->fetch_assoc()) {
            echo "Asiakasnumero: " . $row["asiakasid"]. "<br>- Sähköposti: " . $row["sahkoposti"]. "<br>- Etunimi: " . $row["etunimi"];
	}
    }
	
?> 

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <a class="navbar-brand" href="#">Hockey Base</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
          <a href="#" class="btn btn-info btn-med ml-3">
          <span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart
        </a>
      </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">


    <h1 class="display-4">Fluid jumbotron</h1>
    <p class="lead">Tähän tulee Hockey Base jumbotron kuva.</p>
  </div>

<div class="container"> <!-- Container starts-->
<div class="row text-center">

   <div class="col-lg-3 col-md-6 mb-2">
     <div class="card">
       <img class="card-img-top" src="http://placehold.it/500x325" alt="">
       <div class="card-body">
         <h4 class="card-title">Tuote</h4>
         <p class="card-text"><?php $tulokset(); ?></p>
       </div>
       <div class="card-footer">
         <a href="#" class="btn btn-secondary">Hinta</a>
         <a href="#" class="btn btn-primary">+</a>
       </div>
     </div>
   </div>

   <div class="col-lg-3 col-md-6 mb-4">
     <div class="card">
       <img class="card-img-top" src="http://placehold.it/500x325" alt="">
       <div class="card-body">
         <h4 class="card-title">Tuote</h4>
         <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
       </div>
       <div class="card-footer">
         <a href="#" class="btn btn-secondary disabled">Hinta</a>
         <a href="#" class="btn btn-primary">+</a>
       </div>
     </div>
   </div>

   <div class="col-lg-3 col-md-6 mb-4">
     <div class="card">
       <img class="card-img-top" src="http://placehold.it/500x325" alt="">
       <div class="card-body">
         <h4 class="card-title">Tuote</h4>
         <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
       </div>
       <div class="card-footer">
         <a href="#" class="btn btn-secondary">Hinta</a>
         <a href="#" class="btn btn-primary">+</a>
       </div>
     </div>
   </div>

   <div class="col-lg-3 col-md-6 mb-4">
     <div class="card">
       <img class="card-img-top" src="http://placehold.it/500x325" alt="">
       <div class="card-body">
         <h4 class="card-title">Tuote</h4>
         <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
       </div>
       <div class="card-footer">
         <a href="#" class="btn btn-secondary">Tähän tulee hinta</a>
         <a href="#" class="btn btn-primary">+</a>
       </div>
     </div>
   </div>

 </div>
</div> <!-- container ends-->


<!-- Footer -->
<footer class="py-5 bg-dark">
 <div class="container">
   <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
</div>
  <div style="height: 1200px;">
  </div>
  </body>
</html>
