<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/std_include.php');?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
<?php include_once('head.php'); ?>
</head>
<body>
  <?php include "navigation.php";?>

	<div id="bigcont">
		<div id="content">
      <?php include "home.php"; ?>  
		</div>
											
		<div id="sub-section">
      <?php include "menu_home.php"; ?>  
		</div>
	</div>
  <?php include 'footer.php' ?>
</body>
</html>
