<h1>cast</h1>
<div id="menu2">

<?php
$cast_pages = glob('pages/cast_*.php');

render_link('join', 'Join!');

uasort($cast_pages, function($name1, $name2) { 
    preg_match('/cast_(spring|fall)(\d+)\.php/i', $name1, $matches);
    $season1 = $matches[1];
    $year1 = $matches[2];

    preg_match('/cast_(spring|fall)(\d+)\.php/i', $name2, $matches);
    $season2 = $matches[1];
    $year2 = $matches[2];

    // Implements a hacky comparison function between the two names such that the order is 2003 spring -> 2003 fall -> 2004 spring -> 2004 fall -> etc. etc. etc.
    return ( 1000*$year2 - ord($season2[0]) ) - ( 1000*$year1 - ord($season1[0]) );
});

foreach($cast_pages as $pagefile) {
    $matches = array();
    preg_match('/cast_(spring|fall)(\d+)\.php/i', $pagefile, $matches);
    $season = $matches[1];
    $year = $matches[2];
    
    render_link("cast_$season$year", "$year $season");
}
?>
</div>
