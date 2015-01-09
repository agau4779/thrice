

<br>
<table width="594px" border="0" cellspacing="0" cellpadding="0" align="center" style="text-align:center" >
  <tr>
    <td colspan="3"><img src="./cast/fall2008/<?php $id = $_GET["castmember"];if ( file_exists( "./cast/fall2008/$id" . "_dollar.jpg" ) ){ echo($id);} else{echo("none");}?>_dollar.jpg"  width="589px" height="246px" title="10 Theatre Rice Dollars for 10 years of Theatre Rice!" alt="10 Theatre Rice Dollars for 10 years of Theatre Rice!" <?php $id = $_GET["castmember"];if ( $id=="dennis" ){ echo("class=\"domroll ./cast/fall2008/dennis_joker_dollar.jpg\"");} else{echo("none");}?>" ></td>
  </tr>
  <tr><td colspan="3" height="3px"></td></tr>
  <tr>
    <td><img src="./cast/fall2008/<?php $id = $_GET["castmember"];if ( file_exists( "./cast/fall2008/$id" . "1.jpg" ) ){ echo($id);} else{echo("none");}?>1.jpg"  width="196px" height="147px" title="Head Shot!"></td>
    <td><img src="./cast/fall2008/<?php $id = $_GET["castmember"];if ( file_exists( "./cast/fall2008/$id" . "2.jpg" ) ){ echo($id);} else{echo("none");}?>2.jpg"  width="196px" height="147px" title="Crazy Shot!"></td>
    <td><img src="./cast/fall2008/<?php $id = $_GET["castmember"];if ( file_exists( "./cast/fall2008/$id" . "3.jpg" ) ){ echo($id);} else{echo("none");}?>3.jpg"  width="196px" height="147px" title="Money Shot!"></td>
  </tr>
</table>
<!--
<table width="580" border="0" align="center" cellpadding="0" cellspacing="5">
  <tr>
    <td><img src="./cast/fall2008/<?php $id = $_GET["castmember"];if ( file_exists( "./cast/fall2008/$id" . "_dollar.jpg" ) ){ echo($id);} else{echo("none");}?>1.jpg" class="domroll ./cast/fall2008/<?php $id = $_GET["castmember"];if ( file_exists( "./cast/fall2008/$id" . "3.jpg" ) ){ echo($id);} else{echo("none");}?>3.jpg" /></td>
    <td><img src="./cast/fall2008/<?php $id = $_GET["castmember"];if ( file_exists( "./cast/fall2008/$id" . "2.jpg" ) ){ echo($id);} else{echo("none");}?>2.jpg" class="domroll ./cast/fall2008/<?php $id = $_GET["castmember"];if ( file_exists( "./cast/fall2008/$id" . "4.jpg" ) ){ echo($id);} else{echo("none");}?>4.jpg" /></td>
  </tr>
  <tr>
    <td><div align="center"><h3>1</h3></div></td>
    <td><div align="center"><h3>2</h3></div></td>
  </tr>
</table>-->
<p align="center">&nbsp;</p>
<!-- Questionnaire Content Begins-->
			<td valign="top" align="justify">									
			<?php
			$validPages = array(
			'alan',
			'anthony',
			'catherine',
			'chihiro',
			'christy',
			'daniel',
			'david',
			'dennis',
			'eric',
			'erika',
			'huy',
			'irene',
			'jacek',
			'jack',
			'jeff',
			'jeisun',
			'jerry',
			'jim',
			'joseph',
			'joy',
			'kat',
			'kim',
			'kimberly',
			'mabel',
			'martin',
			'michael',
			'paget',
			'patricia',
			'paul',
			'sasha',
			'steven',
			'suji',
			'vanessa',
			'varun',
			'yubum',
			'yue'
			);
			
			
			$id = $_GET["castmember"];
			$extension = "php";
			
			if ( !$id || $id == "" )
			{
				include "./cast/fall2008/list.php";	//This is the page it defaults to
			}
			else if ( file_exists( "./cast/fall2008/$id.$extension" ) && in_array($_GET['castmember'], $validPages))
			{
			   include "./cast/fall2008/$id.$extension";
			}
			else
			{ include "error.php"; }	//This is the page it goes to when the stuff after ?tr= is invalid
			?>  
			</td>
			<!-- Main Content Ends-->
<p align="center"><a href="./?tr=cast_fall2008&menu=menu_cast"><img src="./cast/fall2008/back.png"></a></p>

<script src="./cast/fall2008/chrisdomroll.js">

/****************************************************
* DOM Image rollover v3.0: By Chris Poole http://chrispoole.com
* Script featured on http://www.dynamicdrive.com
* Keep this notice intact to use it :-)
****************************************************/

</script>
