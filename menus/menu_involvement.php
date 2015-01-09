<h1>get involved</h1>
<div id="menu2">

<?php
$links = array(array('join','join TR!'), array('comm','contact'), array('submissions'), array('externals'), array('charity', 'charities'));
foreach($links as $link) {
  render_link($link[0], isset($link[1]) ? $link[1] : $link[0]);
} 
?>
</div>
