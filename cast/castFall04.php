<html>

<head>
<?php
if($_GET['name']){
    $random = (rand(0, 100))%6;
    echo "<LINK type=\"text/css\" rel=\"stylesheet\" href=\"../scripts/";
    echo "0";
    echo $random;
    echo ".css\">\n";
}else{
    echo "<LINK type=\"text/css\" rel=\"stylesheet\" href=\"../scripts/style1.css\">\n";
}

if (!$_GET['name']) {
    $_GET['name'] = "group";
}

$tempName = filterName($_GET['name']);

?>
 <script language="javascript">
 var num = 1;
 var mod = 2;
 var base = './fall2004/';
 var name = '<?php echo strtolower($tempName) ?>0';
 var currImage =	'';
 var end = '.jpg';

 function preSet()
     {
	 currImage = base + name + num + end;
	 document.getElementById("profileImage").src = currImage;
	 //profileImage.src = currImage;
     }

 function setImg()
     {
	 num = (num++)%mod + 1;
	 currImage = base + name + num + end;
	 document.getElementById("profileImage").src = currImage;
	 //    profileImage.src = currImage;
     }

 </script>


<title></title>
</head>

<BODY leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" <?php if ($_GET['name']) {
?>onLoad="preSet();">
<?php } ?>

<?php

class MemberProfile {
    var $parser;
    var $records;
    var $record;
    var $current_field = '';
    var $field_type;
    var $ends_record;

    function MemberProfile ($filename) {
	$this->parser = xml_parser_create();
	xml_set_object($this->parser, &$this);
	xml_set_element_handler($this->parser, 'start_element', 'end_element');
	xml_set_character_data_handler($this->parser, 'cdata');

	// 1 = single field, 2 = array field, 3 = record container
	$this->field_type = array('number' => 1,
				  'answer' => 1);
	$this->ends_record = array('question' => true);

	$x = join("", file($filename));
	xml_parse($this->parser, $x);
	xml_parser_free($this->parser);
    }

    function start_element ($p, $element, &$attributes) {
	$element = strtolower($element);
	if ($this->field_type[$element] != 0) {
	    $this->current_field = $element;
	} else {
	    $this->current_field = '';
	}
    }

    function end_element ($p, $element) {
	$element = strtolower($element);
	if ($this->ends_record[$element]) {
	    $this->records[] = $this->record;
	    $this->record = array();
	}
	$this->current_field = '';
    }

    function cdata ($p, $text) {
	if ($this->field_type[$this->current_field] === 2) {
	    $this->record[$this->current_field][] = $text;
	} elseif ($this->field_type[$this->current_field] === 1) {
	    $this->record[$this->current_field] .= $text;
	}
    }

    function show_profile() {
	$valid = false;
	$option = -1;
	foreach($this->records as $question)
	{
	    if(trim($question['answer']) == "")
		continue;
	    else{
		$option = $this->showTabTab($question['number']);
		$this->showTabMain($option, trim($question['answer']));
		$valid = true;
	    }
	}
	return $valid;
    }

    function showTabTab($num){
	$str = "";
	$option = -2;
	switch($num){
	case "0":
	    $option = -1;
	    $str = "Eugene the Webmaster is mad at me because..";
	    break;
	case "1":
	    $option = 0;
	    $str = "Name";
	    break;
	case "2":
	    $option = 0;
	    $str = "Major";
	    break;
	case "3":
	    $option = 0;
	    $str = "Minor";
	    break;
	case "4":
	    $option = 0;
	    $str = "Date";
	    break;
	case "5":
	    $option = 0;
	    $str = "Race";
	    break;
	case "6":
	    $option = 1;
	    $str = "What attracts you to Rice?";
	    break;
	case "7":
	    $option = 1;
	    $str = "What are you looking for in Rice?";
	    break;
	case "8":
	    $option = 1;
	    $str = "What is your most BURNING desire?";
	    break;
	case "9":
	    $option = 1;
	    $str = "Who are you?";
	    break;
	case "10":
	    $option = 1;
	    $str = "A knife fight between a wild monkey, Rocky Balboa, and the US Mint." .
		"<br>Where does you money stand?";
	    break;
	case "11":
	    $option = 1;
	    $str = "Who's your side kick towards world domination?";
	    break;
	case "12":
	    $option = 1;
	    $str = "What's the most dramatic/awesome way to be born?";
	    break;
	case "13":
	    $option = 1;
	    $str = "White White White White, what do Cows drink?  (don't cheat)";
	    break;
	case "14":
	    $option = 1;
	    $str = "Whose side do you take?";
	    break;
	}

	if($option == -1){
	    echo "<table width=\"500\" class=\"tabTab\" cellspacing =\"6\">\n";
	    echo "<tr><td align=\"center\"><b>";
	    echo $str;
	    echo "</b>&nbsp;";
	    echo "</td></tr></table>";
	}else if($option == 0){
	    if($num == "5")
	    $option  = 2;
	    if($num == "1" )
	    echo "<table width=\"500\" class=\"\" cellspacing =\"6\">\n";
			
	    echo "<tr><td><table width=\"500\" class=\"tabTab\" cellpadding =\"1\">\n	<tr>\n";
	    echo "<td width=\"100\">";
	    echo $str;
	    echo "&nbsp;";
	    echo "</td>";
	}else{
	    echo "<table width=\"650\" class=\"tabTab\" cellpadding=\"4\">\n";
	    echo "<tr>\n";
	    echo "\t<td>\n";
	    echo $str;
	    echo "\n\t</td>\n";
	    echo "</tr>\n";
	    echo "</table>\n";
	}
	return $option;
    }

    function showTabMain($option, $str){
	if ($option == -1) {
	    echo "<table width=\"500\" class=\"tabMain\">\n";
	    echo "<td align=\"center\">";
	    echo "<b> ";
	    echo $str;
	    echo "</b>";
	    echo "</td>";
	    echo "</tr>\n";
	    echo "</table>\n";
	    echo "<br><br>";
	}else if($option%2 == 0){
	    echo "<td align=\"left\">";
	    echo "<b> ";
	    echo $str;
	    echo "</b>";
	    echo "</td>";
	    echo "</tr>\n	</table></td></tr>\n";
	    if($option == 2)
	    {
		echo "\n	</table>\n";
		echo "<br><br>\n";			
	    }
	}else{
	    echo "<table width=\"650\" border=\"0\" cellpadding=\"7\" cellspacing=\"3\" CLASS=\"tabMain\">\n";
	    echo "<tr>\n";
	    echo "\t<td width=\"650	\">\n\t";
	    echo $str;
	    echo "\n\t</td>\n";
	    echo "</tr>\n";
	    echo "</table>\n";
	    echo "<br>\n";
	}
    }

};

class Members{
    var $parser;
    var $records;
    var $record;
    var $current_field = '';
    var $field_type;
    var $ends_record;

    function Members($filename) {
	$this->parser = xml_parser_create();
	xml_set_object($this->parser, &$this);
	xml_set_element_handler($this->parser, 'start_element', 'end_element');
	xml_set_character_data_handler($this->parser, 'names');

	// 1 = single field, 2 = array field, 3 = record container
	$this->field_type = array('membername' => 1);
	$this->ends_record = array('membername' => true);

	$x = join("", file($filename));
	xml_parse($this->parser, $x);
	xml_parser_free($this->parser);
    }

    function start_element ($p, $element, &$attributes) {
	$element = strtolower($element);
	if ($this->field_type[$element] != 0) {
	    $this->current_field = $element;
	} else {
		
	    $this->current_field = '';
	}
    }

    function end_element ($p, $element) {
	$element = strtolower($element);
	if ($this->ends_record[$element]) {
	    $this->records[] = $this->record;
	    $this->record = array();
	}
	$this->current_field = '';
    }

    function names ($p, $text) {
	if($text > " "){
	    $this->record[$this->current_field] .= $text;
	}
    }

    function show_members() {
	$counter = 0;

	echo "<table class=\"tabTab\" cellpadding=\"1\">\n";
	echo "<tr><td>\n";
	echo "Group Photo!\n";
	echo "</td></tr>\n";
	echo "</table>\n";
	echo "<table class=\"tabMain\"  cellpadding=\"5\" width=\"650\">\n";
	echo "<tr><td align=\"center\">\n";
	echo "<img alt\"click on me!\" title=\"click on me!\" id=\"profileImage\" onClick=\"setImg()\" href=\"#\" />\n";
	echo "</td></tr></table>\n";

	echo "<br><br>\n";

	echo "<table class=\"tabTab\" cellpadding=\"1\">\n";
	echo "<tr><td>\n";
	echo "Members\n";
	echo "</td></tr>\n";
	echo "</table>\n";
	echo "<table class=\"tabMain\" cellpadding=\"5\" width=\"650\">\n";
	echo "<tr>\n";
	foreach($this->records as $member)
	    {		
		if($counter == 0)
		    echo "<td width=\"325\"  >\n";
		if($counter == 18)
		    echo "</td><td width=\"325\" >\n";
		$this->makeLink($member['membername']);
		$counter++;
	    }
	echo "</tr></table>";
    }

    function makeLink($memberName){
	$str = $_SERVER['PHP_SELF'] . '?name=' . $memberName;
	echo "&gt; ";
	echo "<a href=\"" . $str . "\">" . str_replace("_", " ", $memberName) . "</a>\n<br>";
    }
};

error_reporting(0);		//for supressing errors  enable before launch

function createPicture($file)
{
    echo "<table  width=\"650\">\n";
    echo "	<tr>	<td>\n";
    echo "			<img alt\"click on me!\" title=\"click on me!\" id=\"profileImage\" onClick=\"setImg()\" href=\"#\" />\n";
    echo "</td>  </tr>\n";
    echo "</table><br>\n";
}

function noProfile()
{
    if ($_GET['name'] != "eugene_wu") {
	echo "<table width=\"512\" class=\"tabTab\" cellpadding=\|5\">";
	echo "      <tr><td align=\"center\">";
	echo "		" . str_replace("_", " ", $_GET['name']);
	echo "   |   Why I have No Profile";
	echo "      </td></tr>";
	echo "</table>";
	
	echo "<table width=\"512\" class=\"tabMain\" cellpadding=\"5\">";
	echo "	<tr><td align=\"center\">";
	echo "Eugene The Webmaster Gave Me 2 Weeks To Turn In a Profile ";
	echo "And I Still Couldn't Do It";
	echo "	</td></tr>";
	echo "</table>";
	echo "<br>";
    } else {
	echo "<table width=\"512\" class=\"tabTab\" cellpadding=\|5\">";
	echo "      <tr><td align=\"center\">";
	echo "I'm the Webmaster, I don't need no profile.  Word";
	echo "      </td></tr>";
	echo "</table>";
	echo "<br>";

    }
}

function filterName($tempName)
{
    switch($tempName){
	//	case "Art_Chitamitara":
	//case "Krismin_Inocentes":
    case "Sara_Kwon":
	$tempName = "nopic";
	break;
    }
    return $tempName;
    //return "nopic";
}

if ($_GET['name'] && $_GET['name'] != "group") {
    // return info on one book
    createPicture(strtolower($_GET['name']));
    $xmlName = "fall2004/" . strtolower($_GET['name']) . ".xml";
    $profile = new MemberProfile($xmlName);
    if(!$profile->show_profile())
	noProfile();
} else {
    // show menu of books
    $profile = new Members("./fall2004/members.xml");
    //$profile->show_profile();
    $profile->show_members();
    echo "<br>";
	
}

?>

<table class="tabMain" width="650" cellspacing="1">
<tr>
<td><a href="castFall04.php">&lt; &lt; Fall 2004 cast</a>
&nbsp; | &nbsp; click on the pictures to change them!
</td></tr>
</table>

</body></html>
