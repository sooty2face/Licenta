

<!DOCTYPE html>
<html lang="en">

<link href="styles.css" type="text/css" rel="stylesheet" />

<head>
  <title>Power Monitor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Power Monitor</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li>	  <a href="http://localhost/myfiles/get_data.php">Live readings</a></li>
      <li><a href="#">Generate Cost</a></li>
      <li><a href="fetchForChart.php">Readings history</a></li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
        <li><a href="index2.php?action=logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  
  <div class="jumbotron" id="box-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-4></div">
					<div class="col-md-4></div">
						<p class = "container-fluid box-wrapper h1">
						<?php
							session_start();
							echo 'Welcome, '.$_SESSION['username'];
						?>		</h>	
									
									
						<p class = "container-fluid box-wrapper" h1>Here you can see readings from the unit along with spent energy translated into money.</p>
									</br>
									</br>
					<div class="col-md-4></div">
				</div>
			</div>
		</div>
	</div>
	
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="sigla.png" alt="Chania">
      <div class="carousel-caption">
        <h3>FOUR AND A HALF MEN</h3>
        <p>Team Logo!</p>
      </div>
    </div>

    <div class="item">
      <img src="ansamblu2.jpg" alt="Chicago">
      <div class="carousel-caption">
        <h3>The system</h3>
        <p>View of the connected components</p>
      </div>
    </div>

    <div class="item">
      <img src="nano.jpg" alt="New York">
      <div class="carousel-caption">
        <h3>The portable unit</h3>
        <p>Displaying live consumption</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	
</body>
</html>


