


<?php include("includes/header.php");
session_start();

 ?>

<div id="welcome">	
	<h2>Welcome, <span><?php print($_SESSION['session_username']);?> </span></h2>
	<p><a href="logout.php">Logout</a> Here!</p>
</div>
<?php include("includes/footer.php"); ?>

