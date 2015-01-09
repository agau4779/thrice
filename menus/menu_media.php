<h1>media</h1>
<div id="menu2">

<?php
$links = array(array('video'), array('pictures','photography'), array('press'));
foreach($links as $link) {
  render_link($link[0], isset($link[1]) ? $link[1] : $link[0]);
} 
?>
</div>

