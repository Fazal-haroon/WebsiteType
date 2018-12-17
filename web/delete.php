<?php
$conn = mysql_connect("localhost","root","");
$db_conn = mysql_select_db('login_db',$conn);
 
 if(isset($_GET['did']))
 {
	 $del_id = $_GET['did'];
	 
	 mysql_query("DELETE FROM add_student where std_id = '$del_id'");
	 header("location:student.php");
	 }
 
 
 
?>