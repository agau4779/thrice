<script src="./assets/js/jquery-rollover.js"></script>
<link rel="stylesheet" type="text/css" href="./cast/fall2012/member.css" />
<div id='member_info'>
<?php
# $memberinfo for the specific member
# $descriptors for the descriptors 

echo "<img src='./cast/fall2012/photos/{$memberinfo[1]}.PNG' data-hover='./cast/fall2012/photos/{$memberinfo[1]}_prop.PNG' class='member_photo' />";
# Skip the first 2 entries because they're "Full Name" and "linkname" (which are internally used)
foreach(range(2, count($descriptors)) as $idx) {
    echo "<h4>{$descriptors[$idx]}</h4>\n<pre>{$memberinfo[$idx]}</pre>";
}
?>
<a href='./?tr=cast_fall2012&menu=menu_cast'><img src='./cast/back.png' /></a>
</div>
