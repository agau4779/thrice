
<div id="chat"><table width="580" border="0" align="center" cellpadding="0" cellspacing="5">
  <tr>
    <td><img src="./cast/spring2010/<?php $id = $_GET["castmember"];if ( file_exists( "./cast/spring2010/$id" . "1.JPG" ) ){ echo($id);} else{echo("none");}?>1.JPG" class="domroll ./cast/spring2010/<?php $id = $_GET["castmember"];if ( file_exists( "./cast/spring2010/$id" . "3.JPG" ) ){ echo($id);} else{echo("none");}?>2.JPG" /></td>
    <td><img src="./cast/spring2010/<?php $id = $_GET["castmember"];if ( file_exists( "./cast/spring2010/$id" . "2.JPG" ) ){ echo($id);} else{echo("none");}?>3.JPG" ></td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
  </tr>
</table>
</div>


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
				include "./cast/spring2010/list.php";	//This is the page it defaults to
			}
			else if ( file_exists( "./cast/spring2010/$id.$extension" ) /*&& in_array($_GET['castmember'], $validPages)*/)
			{
			   include "./cast/spring2010/$id.$extension";
			}
			else
			{ include "error.php"; }	//This is the page it goes to when the stuff after ?tr= is invalid
			?>  
			</td>
			<!-- Main Content Ends-->
			<p align="center"><a href="./?tr=cast_spring2010&menu=menu_cast"><img src="./cast/spring2010/back.png"></a></p>
			<br>
<script src="./cast/spring2008/chrisdomroll.js">

/****************************************************
* DOM Image rollover v3.0: By Chris Poole http://chrispoole.com
* Script featured on http://www.dynamicdrive.com
* Keep this notice intact to use it :-)
****************************************************/

</script>
