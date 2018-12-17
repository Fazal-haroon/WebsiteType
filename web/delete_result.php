<?php
$conn = mysql_connect("localhost","root","");
$db_conn = mysql_select_db('login_db',$conn);
 
 if(isset($_GET['resid']))
 {
	 $del_id = $_GET['resid'];
	 
	 mysql_query("DELETE FROM results where std_id = '$del_id'");
	 header("location:edit_result.php");
	 }
 
 
 
?>