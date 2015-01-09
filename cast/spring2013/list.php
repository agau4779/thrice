<script src="./assets/js/jquery-rollover.js"></script>
<link rel="stylesheet" type="text/css" href="./cast/spring2013/list.css" />

	<div class="row-fluid">
		<div class="span12">
			<h2>
				Cast of Spring 2013
			</h2>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<img src="./cast1.jpg" width='700px' data-hover="./cast2.jpg"  title="Theatre Rice Spring 2013 Cast!" alt="Cast photo!" align="center"> 
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
            return '<a href="index.php?&castmember=' . $cast_member[1] . '" >' . $cast_member[3] . '</a><br />';
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

<div class="quote">
<?php
        $member_idx = array_rand($castinfo);
        $castmember = $castinfo[$member_idx];
        $question_idx = rand(4, count($castmember)-1);

        $question = $descriptors[$question_idx];
        $answer = $castmember[$question_idx];
        $name = $castmember[3];
?>
    <span style='font-style:italic'><h4><?php echo $question; ?></h4></span>
    <blockquote>
        <?php echo $answer; ?>
    </blockquote>
    -<a href='cast_spring2013?menu=menu_cast&castmember=<?php echo $castmember[1] ?>' >
        <?php echo $name ?>
    </a>

<div class="shows">

    <div class="show">
        <strong><center>Midsemester show: UNCOMMON SENSE</center></strong>
        <a href="cast_spring2013?menu=menu_cast&show=midsemester"><img width="350px" src="midsemester/flyer.jpg"></a>
    </div>

    <div class="show">
        <strong><center>Showcase show: SEAL OF APPROVAL</center></strong>
        <a href="cast_spring2013?menu=menu_cast&show=showcase"><img width="350px" src="showcase/flyer.jpg"></a>
    </div>

</div>

</div>
