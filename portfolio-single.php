<?php

//GET THE URL
$url = $_GET["pid"];

if(!empty($url)){

$server = "localhost";
$s_user = "root";
$s_pass = "";
$db = "nisho";


$con = mysql_connect($server,$s_user,$s_pass) or die(mysql_error());

mysql_select_db($db) or die(mysql_error());

	$url = mysql_real_escape_string($_GET["pid"]);

$s_query = mysql_query("SELECT * FROM portfolio WHERE id ='$url' ") or die(mysql_error());

if(mysql_num_rows($s_query) == 1){
	$p_s = array();
	while($row = mysql_fetch_array($s_query)){
		$p_s[] = $row;
		
	}
	
	echo "
	<div id=\"single-portfolio\">
	<div id=\"portfolio-details\" class=\"container\">
	
		<div class=\"row\">
	
	<div class=\"col-md-7 p-first\">
		<a id=\"x1\" class=\"close-folio-item\" href=\"#\" title=\"Close\"><i class=\"fa fa-times\"></i></a>
		
	<img class=\"img-responsive\" src=\"images/portfolio/".stripslashes($p_s[0][3])."\" alt=\"".stripslashes($p_s[0][5])." - ".stripslashes($p_s[0][1])."\">
		
		</div>
		<!--SECOND SIDE-->
		<div class=\"col-md-3 p-second\">
		<a id=\"x2\" class=\"close-folio-item\" href=\"#\" title=\"Close\"><i class=\"fa fa-times\"></i></a>
	
		<div class=\"row p-row\">
			<div class=\"col-xs-12 p-info\">
				<div class=\"project-info\">
					<h3>".stripslashes($p_s[0][1])." nnnnnnnnnnn cs sdfc<div class=\"line\"></div></h3>
					<p>".stripslashes($p_s[0][2])."</p>
			</div>
			</div>
		
			<div class=\"col-xs-12 p-details\">
				<div class=\"project-details\">
						<h3>Project Details <div class=\"line\"></div></h3>
					<p><span>Client: </span>".stripslashes($p_s[0][5])."ddddddddddddddddddddddddddddddddddddddddddddddddssssssssssssssss asddddd</p>
					<p><span>Date:</span> ".stripslashes($p_s[0][7])."</p>
					<p><span>Tag:</span> ".stripslashes($p_s[0][4])."</p>
				</div>
				</div>  
			</div><!--//row-->
		</div><!--END OF SECOND SIDE-->
		
	</div><!--//row-->
</div>
</div>

	";
	
	
}

else{
	echo "<p style=\"text-align:center;\"><i class=\"icon fa-frown-o fa-2x\"></i> Sorry , an error occurred, please try again later or close.</p>";
}
}

else{
	echo "<!DOCTYPE HTML PUBLIC \"-//IETF//DTD HTML 2.0//EN\">
<html><head>
<title>404 Not Found</title>
</head><body>
<h1>Not Found</h1>
<p>The requested URL ".$_SERVER["PHP_SELF"]." was not found on this server.</p>
</body></html>
";
}
?>