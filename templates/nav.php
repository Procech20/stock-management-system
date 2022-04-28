<?php
session_start();
if(!isset($_SESSION['userId'])){

		// header('Location: ./login.php');
	}

?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="./index.php">LUCKY RICE RMS</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="./index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="./products.php">Products</a></li>
        <li><a href="./stock.php">Stock</a></li>
        <li><a href="#">Report</a></li>

      <li class="logout">
        <a href="./logout.php">Logout</a>
      </li>
</ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

