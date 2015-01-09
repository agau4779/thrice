<h1>links</h1>
<div id="menu2">

<?php
$links = array(array('links_campus', 'campus'), array('charity', 'charities'), array('links_asian', 'asian american'), array('links_alumni', 'rice alumni'), array('links_stereotypes', 'stereotypes'), array('links_theatre_studies', 'theatre studies'), array('links_theatre_groups', 'theatre groups'), array('links_resources', 'resources'));
foreach($links as $link) {
  if(gettype($link) == "array") {
    render_link($link[0], isset($link[1]) ? $link[1] : $link[0]);
  } else {
    render_link($link, $link);
  }
} 
?>
</div>
