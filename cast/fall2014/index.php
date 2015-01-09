<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <link rel='stylesheet' href="../../assets/css/custom.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,700' rel='stylesheet' type='text/css'>
    <title>Theatre Rice - Cast of Spring 2014</title>
  </head>
<body>
<?php include '../../shared/_header.php'; ?>
<?php	
$castmember = $_GET["castmember"];

#A url of the form tr=cast_spring2014&menu=menu_cast goes to the home page
#A url of the form tr=cast_spring2014&menu=menu_cast&castmember=<name> goes to that member's page
#

$castfile = fopen('castinfo.txt', 'r'); 
$castinfo = array();

while (($line = fgetcsv($castfile, 20000, "\t")) !== FALSE) {
    $castinfo[] = $line;
}
fclose($castfile);
unset($castfile);

$descriptors = array_shift($castinfo);

function member_with_name($name) {
    global $castinfo;

    foreach($castinfo as $member) { 
        if( $member[0] == $name ) {
            return $member;
        }
    }
    return NULL;
}

if ( $castmember == NULL ) {
    include "member_list.php";	//This is the page it defaults to
} else if ( member_with_name($castmember) != NULL ) {
    $memberinfo = member_with_name($castmember);
    include "member.php";
} else {
    include "error.php";
}
    ?>

</div>
</div>
	<?php include '../../shared/_footer.php'; ?>
  </body>
</html>