<?php
$conn = mysql_connect("localhost","root","");
$db_conn = mysql_select_db("login_db",$conn);
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link rel="shortcut icon" type="image/jpg" href="img/abc.jpg"/>
 


<script>
   function message(){
	   var a = confirm("stasu da data delete km kana ....>");
	   if (a)
	       return true;
		   else
		   return false;
	   }
</script>






    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Typography | BlueWhale Admin</title>
   <link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
    <!-- BEGIN: load jquery -->
    <script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <!-- END: load jquery -->
    <!-- BEGIN: load jqplot -->
    <link rel="stylesheet" type="text/css" href="css/jquery.jqplot.min.css" />
    <!--[if lt IE 9]><script language="javascript" type="text/javascript" src="js/jqPlot/excanvas.min.js"></script><![endif]-->
    <script language="javascript" type="text/javascript" src="js/jqPlot/jquery.jqplot.min.js"></script>
    <script type="text/javascript" src="js/jqPlot/plugins/jqplot.canvasTextRenderer.min.js"></script>
    <script type="text/javascript" src="js/jqPlot/plugins/jqplot.canvasAxisLabelRenderer.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/jqPlot/plugins/jqplot.barRenderer.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/jqPlot/plugins/jqplot.pieRenderer.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/jqPlot/plugins/jqplot.categoryAxisRenderer.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/jqPlot/plugins/jqplot.highlighter.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/jqPlot/plugins/jqplot.pointLabels.min.js"></script>
    <script type="text/javascript" src="js/jqPlot/plugins/jqplot.donutRenderer.min.js"></script>
    <script type="text/javascript" src="js/jqPlot/plugins/jqplot.bubbleRenderer.min.js"></script>
    <!-- END: load jqplot -->
    <script src="js/setup.js" type="text/javascript"></script>
  <script type="text/javascript">

        $(document).ready(function () {
            setupLeftMenu();

          			setSidebarHeight();


        });
    </script>

</head>
<body>
    <div class="container_12">
        <div class="grid_12 header-repeat">
            <div id="branding">
                <div class="floatleft"></div>
                <div class="floatright">
                    <div class="floatleft">
                        <img src="img/img-profile.jpg" alt="Profile Pic" /></div>
                    <div class="floatleft marginleft10">
                        <ul class="inline-ul floatleft">
                            <li>Hello Admin</li>
                            <li><a href="#">Config</a></li>
                            <li><a href="login.php">Logout</a></li>
                        </ul>
                        <br />
                        <span class="small grey">Last Login: 3 hours ago</span>
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
        <div class="grid_12">
            <ul class="nav main">
                <li class="ic-dashboard"><a href="dashboard.php"><span>Dashboard</span></a> </li>
                <li class="ic-form-style"><a href="javascript:"><span>Controls</span></a>
                    <ul>
                        <li><a href="form-controls.html">Forms</a> </li>
                        <li><a href="buttons.html">Buttons</a> </li>
                        <li><a href="form-controls.html">Full Page Example</a> </li>
                        <li><a href="table.html">Page with Sidebar Example</a> </li>
                    </ul>
                </li>
				<li class="ic-typography"><a href="typography.html"><span>Typography</span></a></li>
                <li class="ic-charts"><a href="charts.html"><span>Charts & Graphs</span></a></li>
                <li class="ic-grid-tables"><a href="table.html"><span>Data Table</span></a></li>
                <li class="ic-gallery dd"><a href="javascript:"><span>Image Galleries</span></a>
               		 <ul>
                        <li><a href="image-gallery.html">Pretty Photo</a> </li>
                        <li><a href="gallery-with-filter.html">Gallery with Filter</a> </li>
                    </ul>
                </li>
                <li class="ic-notifications"><a href="notifications.html"><span>Notifications</span></a></li>

            </ul>
        </div>
        <div class="clear">
        </div>
        <div class="grid_2">
            <div class="box sidemenu">
                <div class="block" id="section-menu">
                    <ul class="section menu">
                        <li><a class="menuitem">students</a>
                            <ul class="empty">
                                <li><a href="student.php">Add Students</a> </li>
                                <li><a href="results.php">results</a> </li>
                                <li><a href="add_class.php">Add_Class</a> </li>
                              
                            </ul>
                        </li>
                        <li><a class="menuitem">Logo</a>
                            <ul class="empty">
                                <li><a href="logo.php">logo update</a> </li>
                                <li><a>empty 2</a> </li>
                                <li><a>empty 3</a> </li>
                                
                            </ul>
                        </li>
                        <li><a class="menuitem">Menu 3</a>
                            <ul class="empty">
                                <li><a>empty 1</a> </li>
                                <li><a>empty 2</a> </li>
                                <li><a>empty 3</a> </li>
                               
                            </ul>
                        </li>
                        <li><a class="menuitem">Menu 4</a>
                            <ul class="empty">
                                <li><a>empty 1</a> </li>
                                <li><a>empty 2</a> </li>
                                <li><a>empty 3</a> </li>
                                
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="grid_10">
            <div class="box round first">
                <h2>student_form</h2>
                
                <div class="block">
                 <form action="do_students.php" method="post">
                    <table class="form">
                        <tr>
                      <td width="26%">
                                <label>std_name</label>
                            </td>
                            <td width="74%">
                                <input type="text" name="std_name" class="large"  required="required"/>
                            </td>
                        </tr>
                         <tr>
                      <td>
                                <label>f/name</label>
                            </td>
                            <td>
                                <input type="text" name="f_name" class="large" />
                            </td>
                        </tr>
                         <tr>
                      <td>
                                <label>class</label>
                            </td>
                            <td>
                            <select name="class">
                            <option value="">select your class</option>
                               <?php
                                  $query = mysql_query("Select * From add_class");
								  while($row = mysql_fetch_array($query))
								  {?>
									  
                                      
                                           <option value="<?php echo $row["class"];?>"><?php echo $row["class"];?></option>
                                      
                                      
								 <?php }
							   ?>
                               </select>
                            </td>
                        </tr>
                       
                       
                        <tr>
                            <td>
                                <label>fees</label>
                            </td>
                            <td>
                                <input type="checkbox" name="hostile" value="hostile" />hostile
                                <input type="checkbox" name="school" value="school" />school
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>gender</label>
                            </td>
                            <td>
                                <input type="radio" name="rd1" value="male" />
                                Male
                                <input type="radio" name="rd1" value="female" />
                                Female
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>city_campus</label>
                            </td>
                            <td>
                                 <select name="campus">
                            <option value="">select your campus</option>
                               <?php
                                  $query = mysql_query("Select * From add_campus");
								  while($row = mysql_fetch_array($query))
								  {?>

                                           <option value="<?php echo $row["campus"];?>"><?php echo $row["campus"];?></option>
								 <?php }
							   ?>
                               </select>
                            </td>
                            
                            
                        </tr>
                        <tr>
                        <td><input type="submit" name="submit" value="submit" style="width:120px; border:1px solid #CCC; border-radius:10px;" /></td>
                        </tr>
                    </table>
                    </form>
                  
                    
                    
                </div>
         
			 
         
         
         
                 <h2>table of student</h2>
               <center>
                <table align="center" style="width:1100px; line-height:50px; height:100px; font-size:12px; ">
         <tr>
         <th align="center">std_id</th>
         <th align="center">name</th>
         <th align="center">f/name</th>
         <th align="center">class</th>
         <th align="center">fees</th>
         <th align="center">gender</th>
         <th align="center">city_branch</th>
         <th align="center">current_time</th>
         <th align="center">Action</th>
         
         </tr>
         <?php
                $q = mysql_query("select * from add_student");
	            while($row = mysql_fetch_array($q))
				{
					
				
		?>
				<tr>
            <td align="center"><?php echo $row["std_id"]; ?></td>
            <td align="center"><?php echo $row["std_name"]; ?></td>
            <td align="center"><?php echo $row["f_name"]; ?></td>
            <td align="center"><?php  echo $row["std_id_class"]; ?></td>
            <td align="center"><?php echo $row["fees"]; ?></td>
            <td align="center"><?php echo $row["gender"]; ?></td>
            <td align="center"><?php echo $row["std_id_campus"]; ?></td>
            <td align="center"><?php echo $row["current_time"]; ?></td>
            <td align="center"><a href="edit_student.php?esid=<?php echo$row["std_id"];   ?>">edit</a>&nbsp;|&nbsp;<a href="delete.php?did=<?php echo $row["std_id"]; ?>" onclick="return message()">delete</a></td>
            
          </tr>
			<?Php 
			}
			?>	
				
</table>
</center>
                
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
    <div id="site_info">
        <p>
            Copyright 2016 <a href="#">HAROON Admin</a>. All Rights Reserved.
        </p>
    </div>
    
</body>
</html>
