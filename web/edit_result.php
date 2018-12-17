<?php
$conn = mysql_connect("localhost","root","");
$db_conn = mysql_select_db("login_db",$conn);
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
                <h2>background</h2>
                <h2>table of student_edit</h2>
               <center>
                <table align="center" style="width:1100px; line-height:50px; height:100px; font-size:12px; ">
         <tr>
         <th align="center">name</th>
         <th align="center">f_name</th>
         <th align="center">english</th>
         <th align="center">urdu</th>
         <th align="center">maths</th>
         <th align="center">gscience</th>
         <th align="center">islamiat</th>
         <th align="center">nazira</th>
         <th align="center">pakstudy</th>
         <th align="center">total</th>
         <th align="center">%age</th>
         <th align="center">grade</th>
         <th align="center">current_time</th>
         <th align="center">Action</th>
         
         </tr>
         <?php
                $q = mysql_query("select * from results");
	            while($row = mysql_fetch_array($q))
				{
											
									 
											
				
		?>
        <?php   if($row["grade"] == "fail")
				{?>
			 <?php echo "<tr style='background:red;'>" ?>
                <?php }else{ ?>
                <?php echo "<tr>" ?>
                <?php } ?>
            <td align="center"><?php echo $row["name"]; ?></td>
            <td align="center"><?php echo $row["f_name"]; ?></td>
            <td align="center"><?php echo $row["english"]; ?></td>
            <td align="center"><?php echo $row["urdu"]; ?></td>
            <td align="center"><?php echo $row["maths"]; ?></td>
            <td align="center"><?php echo $row["gscience"]; ?></td>
            <td align="center"><?php echo $row["islamiat"]; ?></td>
            <td align="center"><?php echo $row["nazira"]; ?></td>
            <td align="center"><?php echo $row["pakstudy"]; ?></td>
            <td align="center"><?php echo $row["total"]; ?></td>
            <td align="center"><?php echo $row["percentage"]; ?></td>
            <td align="center"><?php echo $row["grade"]; ?></td>
            <td align="center"><?php echo $row["add_current_name"]; ?></td>
            <td align="center"><a href="results.php?reid=<?php echo$row["std_id"];   ?>">new_result</a>&nbsp;|&nbsp;<a href="delete_result.php?resid=<?php echo $row["std_id"]; ?>">delete</a></td>
            
            
            
          </tr>
			<?Php 
			}
			?>	
				
			 
         
         
         
          
</table>
<form method="post" action="../pages/portfolio.php">
<tr><td><input type="submit" name="submit" value="origional_form"/></td></tr>

</form>
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
