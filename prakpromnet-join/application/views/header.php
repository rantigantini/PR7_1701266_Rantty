<!DOCTYPE html>
<html>
<head>
	<title>Belajar Join</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/pulse/bootstrap.min.css" rel="stylesheet" integrity="sha384-/uQFqO50IaQu2rNJYKPpV7zwsWJtd6V4DGX4wMw1ATz4KPuZEV96qQ2heVAw2kr2" crossorigin="anonymous">

	</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand"href="<?php echo site_url("c_kereta/index")?>">Belajar Join</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

 <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
              <a class="nav-item nav-link text-light" href="<?php echo site_url("c_kereta/leftjoin")?>">Left Join <span class="sr-only">(current)</span></a>
               <a class="nav-item nav-link text-light" href="<?php echo site_url("c_kereta/rightjoin")?>">Right Join <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link text-light" href="<?php echo site_url("c_kereta/innerjoin")?>">Inner Join <span class="sr-only">(current)</span></a>
         
          </div>
      </div>
  </nav>