	<div class="row-fluid">
		<div class="span12">
			<h2>
				Cast of Fall 2013
			</h2>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<img class="banner" src="img/fa2013.jpg">
		</div>
	</div>
<div class="row-fluid content">
<?php	
$castfile = fopen('castinfo.txt', 'r'); 
$castinfo = array();

while (($line = fgetcsv($castfile, 20000, "\t")) !== FALSE) {
    $castinfo[] = $line;
}
fclose($castfile);
unset($castfile);

$descriptors = array_shift($castinfo);
        function make_link($cast_member) {
            return '<a href="index.php?&castmember=' . $cast_member[1] . '" >' . $cast_member[0] . '</a><br />';
        }

        function make_column($member_list) {
            return '<div class="span4"><p style="text-align: center;">' . implode("\n\t", array_map("make_link", $member_list)) . "</p></div>\n";
        }

        $column_len = 13;
        echo make_column(array_slice($castinfo, $column_len*0, $column_len));
        echo make_column(array_slice($castinfo, $column_len*1, $column_len));
        echo make_column(array_slice($castinfo, $column_len*2, $column_len));
?>
</div>