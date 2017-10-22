<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="logo.png">
<title>IzDatWebsite</title>

<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
		.bg {
  background: url('../Test-Site-1/back.jpg') no-repeat center center;
  position: fixed;
  width: 100%;
  height: 600px; /*same height as jumbotron */
  top:0;
  left:0;
  z-index: -1;
}

.jumbotron {
  height: 600px;
  color: white;
  text-shadow: #444 0 1px 1px;
  background:transparent;
}
		body{
			text-align: center;
		}

	</style>
	
</head>
<body style="padding-top: 70px">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand" href="index.html"><img src="../Test-Site-1/logo.png" class="img-responsive" alt="Placeholder image"></a>
      <a class="navbar-brand" href="index.html">IzDatWebsite</a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="topFixedNavbar1">

      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="about.html">About</a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Websites<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../Dw.web/index.html">Pacific Maritime</a></li>
            <li><a href="#">Coming Soon</a></li>
            <li><a href="#">Coming Soon</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="https://en.wikipedia.org/wiki/Adobe_Dreamweaver" target="_blank">Built With Dreamweaver</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
<div class="bg"></div>
<div class="jumbotron">
  <h1>&nbsp;</h1>
  <h1>Welcome to IZDATWEBSITE</h1>
<p class="lead">Here are some of our websites</p>
</div>

<div class="container">
  <div class="row">
    <h2>Pacific Maritime Website</h2>
    <h4>Last Updated on Nov 12</h4>
    <img src="PMWEB.jpeg" class="img-responsive" alt="Placeholder image">
    <br>
    <br>
    <br>
	  <a href="../Dw.web/index.html" class="btn btn-primary button">Visit This Site</a>
	  
    
  </div>
  <div class="row">
   <h2>BookFace - Social Media Platform</h2>
    <h4>Last Updated on Nov 20</h4>
    <img src="BookFace.jpg" class="img-responsive" alt="Placeholder image">
    <br>
    <br>
    <br>
	  <a href="http://izdatwebsite.x10host.com/chat/chat.html" class="btn btn-primary button">Visit This Site</a>

  </div>
  <hr>
<div class="row">
   
    <h2>Comment Section Test</h2>
	<?php
	
	if($_POST){
		$name = $_POST['name'];
		$content = $_POST['commentContent'];
		$handle = fopen("comments.html","a");
		fwrite($handle,"<br>" . $name . " : " . $content);
		fclose($handle);
	}
	?>


	<form action ="" method ="POST">
		Comments: <textarea rows ="10" cols ="30" name ="commentContent"></textarea><br>
	    Name: <Input type= "text" name = "name"><br>
		<input type = "submit" value ="POST!"><br>
	</form>
		<?php include "comments.html";?>

    
  </div>

 

<hr>

<div class="container">
	<div class="row">
      <div class="col-md-12 text-center"><p>Copyright &copy 2016 Colin Lin</p></div>
    </div>
</div>
	</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
	
</body>
</html>
