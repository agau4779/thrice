<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<?php include_once('head.php'); ?>
</head>
<body>
    <?php include "navigation.php";?>

    <div id="bigcont">
        <!-- Banner Content Begins-->
        <?php
        $id = $PATH[0];
        if ( !$id || $id == "" || $id == "home" )
        {
            $main_text = "Come start your semester with Cal-laboration, a FREE show on August 28, 7:30PM in Dwinelle 145!";
            echo "<h1 style='padding:5px 50px 0px 50px;'>$main_text</h1>";
            echo "<a href='http://www.yelp.com/biz/theatre-rice-berkeley'><img src='callaboration.jpg' title='Theatre Rice!'></a>";    //  THIS IS THE BANNER ITSELF AND THE LINK IT LINKS TO
        }
        ?>
        <!--Banner Content Ends-->

        <div id="content">
        <?php
                if ( !$id || $id == "" ) {
                  //This is the page it defaults to
                  include "pages/home.php";
                } else if ( file_exists( "./pages/$id.php" ) ) {
                  // Any page that lives in the root directory can be
                  // accessed by doing 'id=<filename>' in the url
                  include "./pages/$id.php";
                } else {
                  //This is the page it goes to when the stuff after ?id= is invalid
                  include "pages/error.php";
                }
        ?>
        </div>

        <div id="sub-section">
        <?php
                $menu = $_GET["menu"];

                if ( !$menu || $menu == "" ) {
                  include "menus/menu_home.php";
                } else if ( file_exists( "menus/$menu.php" ) ) {
                  include "menus/$menu.php";
                } else {
                  include "menus/menu_error.php";
                }
        ?>
        </div>
    </div>

<?php include 'footer.php' ?>

</body>
</html>
