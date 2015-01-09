
<div id="chat"><table width="580" border="0" align="center" cellpadding="0" cellspacing="5">
  <tr>
    <td><img src="./cast/fall2009/<?php $id = $_GET["castmember"];if ( file_exists( "./cast/fall2009/$id" . "1.jpg" ) ){ echo($id);} else{echo("none");}?>1.jpg" class="domroll ./cast/fall2009/<?php $id = $_GET["castmember"];if ( file_exists( "./cast/fall2009/$id" . "2.jpg" ) ){ echo($id);} else{echo("none");}?>2.jpg" /></td>
    <td><img src="./cast/fall2009/<?php $id = $_GET["castmember"];if ( file_exists( "./cast/fall2009/$id" . "3.jpg" ) ){ echo($id);} else{echo("none");}?>3.jpg"/></td>
  </tr>
</table>
</div>


<!-- Questionnaire Content Begins-->
			<td valign="top" align="justify" >		
			<?php
			$validPages = array(

			);
			
			
			$id = $_GET["castmember"];
			$extension = "php";
			
			if ( !$id || $id == "" )
			{
				include "./cast/fall2009/list.php";	//This is the page it defaults to
			}
			else if ( file_exists( "./cast/fall2009/$id.$extension" ) /*&& in_array($_GET['castmember'], $validPages)*/)
			{
			   include "./cast/fall2009/$id.$extension";
			}
			else
			{ include "blank.php"; }	//This is the page it goes to when the stuff after ?tr= is invalid
			?>  
			</td>
			<!-- Main Content Ends-->
			<p align="center"><a href="./?tr=cast_fall2009&menu=menu_cast"><img src="./cast/fall2009/back.png"></a></p>
			<br>
<script src="./cast/fall2008/chrisdomroll.js">

/****************************************************
* DOM Image rollover v3.0: By Chris Poole http://chrispoole.com
* Script featured on http://www.dynamicdrive.com
* Keep this notice intact to use it :-)
****************************************************/

</script>
