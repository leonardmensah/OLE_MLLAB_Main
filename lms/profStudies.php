<?php session_start(); //error_reporting(1);?>
<html>
<head>
<title>Open Learning Exchange - Ghana</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Copyright" content="ole.org.gh">
<meta name="description" content="OMS Ole Ghana">
<meta name="keywords" content="Admin Page">
<meta name="author" content="Open Learning Exchang">
<meta name="language" content="English">

<link rel="shortcut icon" href="stylesheet/img/devil-icon.png"> 
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<style>
body {
	background: url(images/latar.jpg);
	margin: 0;
	padding: 0;
	font-family: Arial;
	font-size: 12px;
	color: #2e2e2e;
	text-align: center;
}
</style>
<?php
$showProfStudies = false;
$roles = "<ul>";
for($cnt=0;$cnt<= sizeof($_SESSION['role']); $cnt++){
	switch(strtolower($_SESSION['role'][$cnt])){
		case "teacher":
			$roles = $roles.'<li><a href="dasboard.php">Teacher</a></li>';
			break;
		case "leadteacher":
			$roles = $roles.'<li><a href="leadteacher.php">Lead Teacher.</a></li>';
			break;
		case "headteacher":
			$roles = $roles.'<li><a href="headteacher.php">Head Teacher</a></li>';
			break;
		case "coach":
			$roles = $roles.'<li><a href="coach.php">Coach</a></li>';
			break;
		default:
			if(!$showProfStudies)
			{
				$roles = $roles.'<li><a href="profStudies.php">BeLL</a></li>';
				$showProfStudies =true;
			}
		//case "administrator":
//			$roles = $roles.'<li><a href="dasboard.php">Teacher</a></li>';
//			$roles = $roles.'<li><a href="leadteacher.php">Lead T.</a></li>';
//			$roles = $roles.' <li><a href="headteacher.php">Head</a></li>';
//			$roles = $roles.'<li><a href="coach.php">Coach</a></li>';
//		break;
	}
}
$roles = $roles."</ul>";
if(sizeof($_SESSION['role'])<1)
{
	$mystring = "index.php";
	die('<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$mystring.'">');
}
?>
<script type='text/javascript'>
var now = new Date() 
var fmat= now.getFullYear()+'-'+ (now.getMonth()+1)+'-'+(now.getDay()+10)+' '+(now.getHours())+':'+(now.getMinutes())+':'+(now.getSeconds());
</script>
<body>
<div id="header">
	<div class="inHeader">
		<div class="mosAdmin">Hello,  <?php echo $_SESSION['name'];?><br>
	    | <a href="index.php" onClick="location.href=this.href+'?signout=true&systemDateForm='+fmat;return false;" >Sign Out </a>| <a href="#">Help</a> </div>
	  <div class="clear"></div>
	</div>
</div>

<div id="wrapper" style="background: #fff url(images/bg_kiri.png) repeat-y;">
	<div id="leftBar">
	<?php echo $roles;?>
	</div>
	<div id="rightContent">
	<h3>Professional Studies </h3>
	<div class="shortcutHome"></div>
     <div class="shortcutHome">
         <a href="pages/Teacher_resource.php" target="DashScreen"><img src="images/teacher.png" alt=""><br>
Teacher Resources</a>
		 </div>
     <div class="shortcutHome"> <a href="pages/all_resources.php"  target="DashScreen"><img src="images/listRes.png" alt=""><br>
      Student Resources
      </a> </div>
		
		<div class="clear"></div>
		
		<div id="smallRight">
		  <table align="center" style="border: none;font-size: 12px;color: #5b5b5b;width: 100%;margin: 10px 0 10px 0;">
			<tr><td height="981" colspan="2" valign="top" style="border: none;padding: 4px;"><iframe height="970" frameborder="0" width="640" src="pages/displayQuotes.php" name="DashScreen"></iframe>&nbsp;</td></tr>
		  </table>
		</div>
	</div>
<div class="clear"></div>
<div id="footer">
	&copy; 2012 Open Learning Exchange - Ghana <br>
</div>
</div>
</body>
</html>