<?php
$conn = mysql_connect("localhost","root","");
$db_conn = mysql_select_db('login_db',$conn);
 
?>
<!doctype html>
<html>
<head>
<style type="text/css">
body{
	
	background:-webkit-linear-gradient(0deg,DeepSkyBlue 5%,white);
	}
	
	label{
		font-family:Arial, Helvetica, sans-serif;
		text-shadow:2px 3px 2px #999999 , -2px 4px 5px #3333FF;
		font-size:20px;
		color:#FFF;
		}
		
		input{
			border:1px solid #30F;
			margin:10px;
			color:#333;
			padding:5px;
			border-radius:10px;
			box-shadow:inset 4px 4px 5px #00FFCC , inset -4px -4px 5px #00FFCC;
			 border-radius:10px 1px 40px 1px;
			 height:28px;
			}
			
			form{
				margin-top:10px;
				margin-right:50px;
				background:#63C;
				width:40%;
				border:1px solid #30F;
				border-radius:10px 1px 85px 1px;
				box-shadow:6px 6px 4px 1px #999999;
				border:20px solid rgba(0,0,0,0.3);
				transition:width 7s;
			
				}
				
				form:hover{
					width:30px;
					height:0px;
					}
				/*.login:hover{
					transform:rotate(45deg);
				-webkit-animation-duration:8s;
				animation-timing-function:9s;
					
					}
*/

</style>

<meta charset="utf-8">
<title>Untitled Document</title>
</head>
 
<body>
<center>
<?php
if(@$_GET['msg'])
{
	echo @$_GET['msg']; 
	}
?>
<form action="" method="post">
<p><img src="img-profile.jpg" alt="admin"  /></p>
<p>
<label>Username:</label>
<input name="username" type="text" size="50"  />
</p>
<br />
<p>
<label>Password:</label>
<input name="password" type="password" size="50"  />
</p>
<br />
<p>
<input type="submit" name="submit" value="login" class="login" style="width:120px; font-size:16px; color:#30F; border-color:#30F;" />
</p>

</form>

</center>

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
		 header("location:dashboard.php");
		 }else{
			  header("location:login.php?msg=sory try again");
			 }

  }

?>


</body>
</html>