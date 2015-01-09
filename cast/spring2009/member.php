<!--
<div id="chat"><table width="580" border="0" align="center" cellpadding="0" cellspacing="5">
  <tr>
    <td><img src="./cast/spring2009/<?php $id = $_GET["castmember"];if ( file_exists( "./cast/spring2009/$id" . "1.jpg" ) ){ echo($id);} else{echo("none");}?>1.jpg" class="domroll ./cast/spring2008/<?php $id = $_GET["castmember"];if ( file_exists( "./cast/spring2009/$id" . "3.jpg" ) ){ echo($id);} else{echo("none");}?>3.jpg" /></td>
    <td><img src="./cast/spring2009/<?php $id = $_GET["castmember"];if ( file_exists( "./cast/spring2009/$id" . "2.jpg" ) ){ echo($id);} else{echo("none");}?>2.jpg" class="domroll ./cast/spring2008/<?php $id = $_GET["castmember"];if ( file_exists( "./cast/spring2009/$id" . "4.jpg" ) ){ echo($id);} else{echo("none");}?>4.jpg" /></td>
  </tr>
  <tr>
    <td><div align="center"><h3>human form</h3></div></td>
    <td><div align="center"><h3>animal form</h3></div></td>
  </tr>
</table>
</div>-->
<table width="600px" border="0" cellspacing="0" cellpadding="0" align="center" style="text-align:center" >
  <tr>
    <td colspan="2"><img src="./cast/spring2009/<?php $id = $_GET["castmember"];if ( file_exists( "./cast/spring2009/$id" . "3.jpg" ) ){ echo($id);} else{echo("none");}?>3.jpg"  width="600px" height="480px" title="Superpower!" alt="Superpower!" <!--<?php $id = $_GET["castmember"];if ( $id=="dennis" ){ echo("class=\"domroll ./cast/spring2009/dennis3alt.jpg\"");} else{echo("none");}?>" >--></td>
  </tr>
  <tr><td colspan="2" height="3px"></td></tr>
  <tr>
    <td><!--<img src="./cast/spring2009/<?php $id = $_GET["castmember"];if ( file_exists( "./cast/spring2009/$id" . "1.jpg" ) ){ echo($id);} else{echo("none");}?>1.jpg"  width="196px" height="147px" title="Head Shot!"></td>-->
    <td><!--<img src="./cast/spring2009/<?php $id = $_GET["castmember"];if ( file_exists( "./cast/spring2009/$id" . "2.jpg" ) ){ echo($id);} else{echo("none");}?>2.jpg"  width="196px" height="147px" title="Crazy Shot!"></td>-->
  </tr>
</table>

<p align="center">&nbsp;</p>
<!-- Questionnaire Content Begins-->
			<td valign="top" align="justify" >		
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
				include "./cast/spring2009/list.php";	//This is the page it defaults to
			}
			else if ( file_exists( "./cast/spring2009/$id.$extension" ) /*&& in_array($_GET['castmember'], $validPages)*/)
			{
			   include "./cast/spring2009/$id.$extension";
			}
			else
			{ include "error.php"; }	//This is the page it goes to when the stuff after ?tr= is invalid
			?>  
			</td>
			<!-- Main Content Ends-->
			<p align="center"><a href="./?tr=cast_spring2009&menu=menu_cast"><img src="./cast/spring2009/back.png"></a></p>
			<br>
<script src="./cast/spring2008/chrisdomroll.js">

/****************************************************
* DOM Image rollover v3.0: By Chris Poole http://chrispoole.com
* Script featured on http://www.dynamicdrive.com
* Keep this notice intact to use it :-)
****************************************************/

</script>
