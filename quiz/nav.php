<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">JaimeRamosJr</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="multiple_choice.php">Multiple Choice</a></li>
      <li><a href="index.php">Tech Exam</a></li>
	 
	     <?php if(isset($_COOKIE['user'])){ ?>
				
			 <li><a href="logout.php">Logout</a></li>
		<?php }else{?>
			  <li><a href="index.php">Login</a></li>
		<?php } ?>

	  </li>
    </ul>
  </div>
</nav>