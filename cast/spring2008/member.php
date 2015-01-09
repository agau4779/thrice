<p align="center"><a href="./?tr=cast_spring2008&menu=menu_cast"><img src="./cast/spring2008/back.png"></a></p>

<div id="chat"><table width="580" border="0" align="center" cellpadding="0" cellspacing="5">
  <tr>
    <td><img src="./cast/spring2008/<?php $id = $_GET["castmember"];if ( file_exists( "./cast/spring2008/$id" . "1.jpg" ) ){ echo($id);} else{echo("none");}?>1.jpg" class="domroll ./cast/spring2008/<?php $id = $_GET["castmember"];if ( file_exists( "./cast/spring2008/$id" . "3.jpg" ) ){ echo($id);} else{echo("none");}?>3.jpg" /></td>
    <td><img src="./cast/spring2008/<?php $id = $_GET["castmember"];if ( file_exists( "./cast/spring2008/$id" . "2.jpg" ) ){ echo($id);} else{echo("none");}?>2.jpg" class="domroll ./cast/spring2008/<?php $id = $_GET["castmember"];if ( file_exists( "./cast/spring2008/$id" . "4.jpg" ) ){ echo($id);} else{echo("none");}?>4.jpg" /></td>
  </tr>
  <tr>
    <td><div align="center"><h3>human form</h3></div></td>
    <td><div align="center"><h3>animal form</h3></div></td>
  </tr>
</table>
</div>
<p align="center">&nbsp;</p>
<!-- Questionnaire Content Begins-->
			<td valign="top" align="justify">									
			<?php
			$validPages = array(
			'adrienne',
			'alan',
			'allen',
			'allie',
			'anthony',
			'christy',
			'jin',
			'dash',
			'david',
			'dennis',
			'elita',
			'eric',
			'erika',
			'gene',
			'irenes',
			'irenev',
			'jacek',
			'jeff',
			'jerry',
			'jessica',
			'jim',
			'jina',
			'john',
			'jonathan',
			'joy',
			'julius',
			'kat',
			'kim',
			'leda',
			'mabel',
			'martin',
			'melvyn',
			'patricia',
			'tara',
			'thaen',
			'thomas',
			'tran',
			'vanessa',
			'vivian',
			'wafa',
			'yubum',
			'yue'
			);
			
			
			$id = $_GET["castmember"];
			$extension = "php";
			
			if ( !$id || $id == "" )
			{
				include "./cast/spring2008/list.php";	//This is the page it defaults to
			}
			else if ( file_exists( "./cast/spring2008/$id.$extension" ) && in_array($_GET['castmember'], $validPages))
			{
			   include "./cast/spring2008/$id.$extension";
			}
			else
			{ include "error.php"; }	//This is the page it goes to when the stuff after ?tr= is invalid
			?>  
			</td>
			<!-- Main Content Ends-->
<script src="./cast/spring2008/chrisdomroll.js">

/****************************************************
* DOM Image rollover v3.0: By Chris Poole http://chrispoole.com
* Script featured on http://www.dynamicdrive.com
* Keep this notice intact to use it :-)
****************************************************/

</script>
