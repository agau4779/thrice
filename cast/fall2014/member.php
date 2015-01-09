<link rel="stylesheet" type="text/css" href="member.css" />
<script src="../../assets/js/jquery-1.10.1.min.js"></script>
<script src="../../assets/js/jquery-rollover.js"></script>
<div id='member_info'>
<?php
# $memberinfo for the specific member
# $descriptors for the descriptors 
echo "<div class = 'row-fluid content'>
	<div class='span12'>
		<h2>$memberinfo[1]</h2>
	</div>
</div>";

echo "<img src='img/{$memberinfo[0]}1.jpg' width='700px' data-hover='img/{$memberinfo[0]}2.jpg' class='member_photo' />";

# Skip the first entry because it's just "linkname" (which is internally used for connecting to photos and naming the person's page)
foreach(range(2, count($descriptors)-1) as $idx) {
    echo "<div class = 'row-fluid content'><div class='span12'><h4>{$descriptors[$idx]}</h4>\n<p>{$memberinfo[$idx]}</p></div></div>";
}
?>
<div class = 'row-fluid content'>
	<div class='span12'>
		<p style="text-align=center"><a href='.'>Back to the Cast List.</a></p>
	</div>
</div>
</div>