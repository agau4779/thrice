<?php

//$page     => the value of the tr= query string; 
//$text   => the text for the link
//Keeps the rest of the query string intact
function render_link($page, $text, $menu = null) {
  global $PATH;

  if ( file_exists( "pages/$page.php" ) && $PATH[0] === $page) { // if the current page is this link
    $ele = "<span>$text</span>";
  } else {
    if( !isset($menu) ) {
      $menu = $_GET['menu']; //copy the menu parameter if not specified
    }
    $query = array('menu' => $menu);
    $query_string = http_build_query($query);
    $ele = "<a href='/{$page}?{$query_string}'>$text</a>";
  }
  echo "<li>$ele</li>";
}


function databaseConnect(){
  $mysql = get_env('mysql_info');
  $usr = $mysql['user'];
  $pwd = $mysql['password'];
  $db = $mysql['db'];
  $host = $mysql['host'];
  /*== CONNECT TO DATABASE ==*/
  $cid = mysql_connect($host,$usr,$pwd);
  if (!$cid) {
      print "databaseConnect() ERROR: " . mysql_error() . "<br>";    
  }
  #select database to use
  mysql_select_db($db, $cid);
  return $cid;	
}

?>
