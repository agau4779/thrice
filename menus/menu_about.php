<h1>about</h1>
<div id="menu2"> 
<?php
$links = array(array('history'), array('comm','committee'), array('charity', 'charities'), array('faq'));
foreach($links as $link) {
  render_link($link[0], isset($link[1]) ? $link[1] : $link[0]);
} 
?>
</div>
