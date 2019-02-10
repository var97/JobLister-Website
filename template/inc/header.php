<!DOCTYPE html>
<html>
<head>
	<title>Job Lister</title>
	<link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	 <div class="container">
     <div class="bs-component">
              <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand" href="#"><?php echo SITE_TITLE; ?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor01">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="create.php">Create Listing</a>
                    </li>
                  </ul>
                  <!--<form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                  </form>-->
                </div>
              </nav>
         
      </div>
      <br>
      <?php displayMessage(); ?>