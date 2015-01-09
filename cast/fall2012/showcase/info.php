<div class="showcase">
<strong><center>Showcase show: ERROR 404</center></strong>
<p>
Thanks to everyone for coming to Theatre Rice's ERROR 404! Here you can relive the show by looking through pictures, the program, and a video of the whole show!
</p>
<iframe width="700" height="500" src="http://www.youtube.com/embed/videoseries?list=PLu7ejeC9oec2fyp1Zq7KguG6K3a6uv1Xk" frameborder="0" allowfullscreen></iframe>
<!-- INSERT SMUGMUG HERE -->
<?php

    array_map(
        function ($filename) {
            $picurl = "cast/fall2012/showcase/program/" . $filename;
            echo "<a href='$picurl'><img style='width: 31%; height: 350px; margin: 5px;' src='$picurl'></img>";
        },
        array('TR Showcase Big 3.jpg', 'TR Showcase BLT.jpg', 'GoodGame.jpg', 'TR Showcase Save To Drafts.jpg', 'TR Almost Maine Page.jpeg', 'TR ERROR 404 GM page.jpg')
    );
?>

</div>

<div class="centered">
<a href='./?tr=cast_fall2012&menu=menu_cast'><img src='./cast/back.png' /></a>
</div>

