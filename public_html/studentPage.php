<?php 
$required=array('P');
include("config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="schoolBag.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/options.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$(".subHeading:last").css({borderBottomColor:'white'});
<?php if($_SESSION["year"]==9){
?>
	showFormOverlay("<div class='subHeadingNoClose' style='width:100%'>Transition Year Selection</div><form class='formInOverlay' id='TYSelection'><label>Are you doing Transition year this year?</label><select name='year'><option value='yes'>Yes</option><option value='no'>No</option><input id='submit' type='button' value='Update' /></form>");
<?php
}
?>
})
</script>
<?php if(isset($_GET["subPage"])){
?>
<style>
#options{
	position:absolute;
	left:50%;
	margin-left:-249px;
	top:188px;
	height:98px;	
	width:530px;
}

.option {
	width:78px;
	height:98px;
	margin-left:2px;
	margin-right:2px;
	font-size:8px;
}
.option img{
	margin:2px;
	height:104px;
	width:74px;
}
#options .subHeading{
	margin-left:-10px;
	width:500px;
	height:20px;
	font-size:12px;
	background-position:-30px top;
}
#header{
	height:285px;
}
</style>

<?php
} else {
?>
<style>
#options{
margin-left:10px;
}
#options .subHeading{
margin-left:-10px;
width:785px;
height:23px;
}
</style>
<?php
};?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $_SESSION["displayName"]."'s Schoolbag";?></title>
</head>

<body>
<div id="centeredContent">
<?php include("includes/header.php");?>
<?php 
if(isset($_GET["subPage"]) && strpos($_GET["subPage"],"../")===false && is_file("includes/studentIncludes/".$_GET["subPage"].".php")){
	include("includes/studentIncludes/".basename($_GET["subPage"]).".php");
}
?>
<div class="divider"></div>
<?php include("includes/studentIncludes/studentOptions.php");?>
<div class="divider"></div>
<?php include("includes/studentIncludes/googleLibrary.php");?>
<div class="divider"></div>
<?php include("includes/footer.php");?>
<?php if(isset($_SESSION["actualUserID"])){ ?>
<div class="backToTeacher"><a href="changeUserType.php">&laquo; Back to teacher page</a></div>
<?php }?>
</div>
</body>
</html>