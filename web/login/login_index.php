<?php
$conn = mysql_connect("localhost","root","");
$db_conn = mysql_select_db('login_db',$conn);
 
?>



<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <body>
  
  <?php
if(@$_GET['msg'])
{
	echo @$_GET['msg']; 
	}
?>
  
<div class="container">
	<section id="content">
		<form action="" method="post">
			<h1>Login Form</h1>
			<div>
				<input name="username" type="text" placeholder="Username" required id="username" />
			</div>
			<div>
				<input name="password" type="password" placeholder="Password" required id="password" />
			</div>
			<div>
				<input type="submit" name="submit" value="Log in" />
				<a href="#">Lost your password?</a>
			</div>
		</form><!-- form -->
        
        
        <?php


	
   
if(isset($_POST["submit"]))
{
 	$username = $_POST["username"];
 	$password = $_POST["password"];
	$q = mysql_query("select * from login_table");
	$row = mysql_fetch_array($q);
	$db_u =  $row["username"];
	 $db_p = $row["password"];
	 
	 if($username == $db_u && $password == $db_p){
		 header("location:../dashboard.php");
		 }else{
			  header("location:login_index.php?msg=sorry try again your account is uncorrect");
			 }

  }

?>
		<div class="button">
			
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
  
    <script src="js/index.js"></script>

</body>
</html>
