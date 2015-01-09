<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>				 
<script type="text/javascript">
  if(parent.location != window.location) 
    parent.location = self.document.location;
</script>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Theatre Rice - UC Berkeley Modern Asian American Theatre</title>
<link rel="shortcut icon" href="favicon.ico">
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-148136-3");
pageTracker._trackPageview();
</script>
<body>
	<div id="bighead">
		<div id="header">
		<table class="fivepix"><tr><td></td></tr></table>
		<a href="?tr="><img src="trheader_green_text.png" alt="theatre rice"></a></div>
		<?php include "header.php";?>
        <div id="members"><a href="members/?tr=home"><img src="members.png"></a></div>
	</div>
	<div id="bigcont">
	
	<!-- Banner Content Begins-->							
	<?php
	$id = $_GET["tr"];
	$extension = "php";
	if ( !$id || $id == "" || $id == "home")
	{
		echo "<a style=\"margin-left:-1px;\" href=\"./?tr=schedule&menu=menu_about\"><img src=\"banner_batteries.jpg\" title=\"Upcoming Show!\"></a>";
	}
	else
	{ }	//Do nothing
	?> 
	 <!--Banner Content Ends-->
	
	
		<div id="content">
			<!-- Main Content Begins-->
			<td valign="top" align="justify">									
			<?php
			$validPages = array(
			'home',
			'about',
				'history',
				'faq',
				'charity',
				'constitution',
				'schedule',
			'cast',
				'cast_fall2008',
				'cast_spring2008',
				'cast_fall2007',
				'cast_spring2007',
				'cast_fall2006',
				'cast_spring2006',
				'cast_fall2005',
				'cast_spring2005',
				'cast_fall2004',
				'cast_spring2004',
				'cast_fall2003',
				'cast_spring2003',
				'cast_fall2002',
			'involvement',
				'join',
				'writers_block',
				'submissions',
				'comm',
			'media',
				'video',
				'vlog',
				'music',
				'pictures',
				'flyers',
				'press',
				'trailer',
			'chat',
			'chat2',
			'members',
			'links',
				'links_campus',
				'links_asian',
				'links_alumni',
				'links_stereotypes',
				'links_theatre_studies',
				'links_theatre_groups',
				'links_resources',
			'bugs'
			);
			
			
			$id = $_GET["tr"];
			$cast = $_GET["cast"];
			$extension = "php";
			
			if ( !$cast || $cast == "" )
			{
				$prefix = "";	//This is the page it defaults to
			}
			else if ( !$cast || $cast == "spring2006" )
			{
				$prefix = "/cast/spring2006";	//This is the page it defaults to
			}
			
			if ( !$id || $id == "" )
			{
				include "home.php";	//This is the page it defaults to
			}
			else if ( file_exists( ".$prefix/$id.$extension" ) /*&& in_array($_GET['tr'], $validPages) */)
			{
				include ".$prefix/$id.$extension";
			}
			else
			{ 	include "error.php"; }	//This is the page it goes to when the stuff after ?tr= is invalid
			?>  
			</td>
			<!-- Main Content Ends-->
			<br><br>
		</div>
											
		<div id="sub-section">
			<!-- Subsection Content Begins-->
			<td valign="top" align="justify">									
			<?php
			$validPages = array(
			'menu_error',
			'menu_home',
			'menu_home_old',
			'menu_about',
			'menu_faq',
			'menu_cast',
			'menu_involvement',
			'menu_media',
			'menu_links',
			'menu_chat',
			'menu_bugs',
			'menu_blank'
			);
			
			
			$id = $_GET["menu"];
			$extension = "php";
			
			if ( !$id || $id == "" )
			{
				include "menu_home.php";	//This is the page it defaults to
			}
			else if ( file_exists( "$id.$extension" ) && in_array($_GET['menu'], $validPages) )
			{
			   include "$id.$extension";
			}
			else
			{ include "menu_error.php"; }	//This is the page it goes to when the stuff after ?tr= is invalid
			?>  
			</td>
			<!-- Subsection Content Ends-->
			<br
		</div>
	</div>
		<div id="footer">
		<table width="100%"><tr>
		</td><!--<td align="justify" class="validation">
		<p>
		<a href="http://validator.w3.org/check?uri=referer"><img
		        src="http://www.w3.org/Icons/valid-html401-blue"
		        alt="Valid HTML 4.01 Strict" height="31" width="88"></a>
		</p>

		</td><td align="justify" class="validation">
		<p>
		<a href="http://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fwww.ocf.berkeley.edu%2F~thrice%2Fstyle.css">
		    <img style="border:0;width:88px;height:31px"
		        src="vcss-red.gif"
		        alt="Valid CSS!" >
		</a>
		</p>

		</td>--><td align="center" width="220px">
		<p>
		    ©2008 theatre rice
		</p>

		</td><td width="660px">
		</td><td align="right" width="150px">
		<!-- AddThis Button BEGIN -->
		<script type="text/javascript">addthis_pub  = 'jacekmw';</script>
		<a href="http://www.addthis.com/bookmark.php" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="button1-share.gif" width="125" height="16" border="0" alt="" ></a><script type="text/javascript" src="http://s7.addthis.com/js/152/addthis_widget.js"></script>
		<!-- AddThis Button END -->
		</td></tr>
		</table>
	</div>

</td></table>
</div>
</body>
</html>
