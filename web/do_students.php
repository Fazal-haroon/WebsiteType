  <?php
$conn = mysql_connect("localhost","root","");
$db_conn = mysql_select_db("login_db",$conn);
?>

   <?php
                    if(isset($_POST["submit"]))
					{
						  $std_name = $_POST["std_name"];
						 
						  $f_name = $_POST["f_name"];
						  @$class = $_POST["class"];
						    @$fees = $_POST["hostile"];
						   @$fee = $_POST["school"];
						   @$gender = $_POST["rd1"];
						  $city_branch = $_POST["campus"];
						
					 
						mysql_query("insert into add_student(std_name,f_name,std_id_class,fees,gender,std_id_campus) value('$std_name','$f_name','$class','$fees $fee','$gender','$city_branch')");
						 
						 header("location:student.php");
					 
					}
					?>