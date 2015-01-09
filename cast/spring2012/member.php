<p align="center">&nbsp;</p>
<!-- Questionnaire Content Begins-->
			<td valign="top" align="justify" >		
			<?php		
			$validPages = array(
				"abbya"
			
			);
			
			$id = $_GET["castmember"];
			$extension = "php";
			
			if ( !$id || $id == "" )
			{
				include "./cast/spring2012/list.php";	//This is the page it defaults to
			}
			else if ( file_exists( "./cast/spring2012/$id.$extension" ) /*&& in_array($_GET["castmember"], $validPages)*/)
			{
			   include "./cast/spring2012/$id.$extension";
			}
			else
			{ include "error.php"; }	//This is the page it goes to when the stuff after ?tr= is invalid
			?>  
			</td>
			<!-- Main Content Ends-->
			<p align="center"><a href="./?tr=cast_spring2012&menu=menu_cast"><img src="./cast/spring2012/back.png"></a></p>
			<br>
<script src="./cast/spring2012/chrisdomroll.js">

/****************************************************
* DOM Image rollover v3.0: By Chris Poole http://chrispoole.com
* Script featured on http://www.dynamicdrive.com
* Keep this notice intact to use it :-)
****************************************************/

</script>
