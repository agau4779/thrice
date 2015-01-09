<script src="./assets/js/jquery-rollover.js"></script>
<link rel="stylesheet" type="text/css" href="./cast/fall2012/list.css" />
<p>
<img src="./cast/fall2012/cast1.jpg" data-hover="./cast/fall2012/cast2.jpg"  title="Theatre Rice Fall 2012 Cast!" alt="Cast photo!" align="center"> 
</p>
<h3><center>The Fall 2012 cast consists of:</center></h3>

<br>

<div class="links">
    <?php
        function make_link($cast_member) {
            return '<a href="?tr=cast_fall2012&menu=menu_cast&castmember=' . $cast_member[1] . '" >' . $cast_member[0] . '</a>';
        }

        function make_column($member_list) {
            return '<div class="column">' . implode("\n\t", array_map("make_link", $member_list)) . "</div>\n";
        }

        $column_len = floor(count($castinfo) / 3 + 1);
        echo make_column(array_slice($castinfo, $column_len*0, $column_len));
        echo make_column(array_slice($castinfo, $column_len*1, $column_len));
        echo make_column(array_slice($castinfo, $column_len*2, $column_len));
    ?>

</div> 

<div class="shows">

    <div class="show">
        <strong><center>Midsemester show: HIGH VOLTAGE</center></strong>
        <a href="cast_fall2012?menu=menu_cast&show=midsemester"><img width="350px" src="./cast/fall2012/midsemester/flyer.jpg"></a>
    </div>

    <div class="show">
        <strong><center>Showcase show: ERROR 404</center></strong>
        <a href="cast_fall2012?menu=menu_cast&show=showcase"><img width="350px" src="./cast/fall2012/showcase/flyer.jpg"></a>
    </div>

</div>
