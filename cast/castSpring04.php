<html>

<head>
	<?php
		if($_GET['name']){
			$random = (rand(0, 100))%6;
			echo "<LINK type=\"text/css\" rel=\"stylesheet\" href=\"/~thrice/archive/other/scripts/";
			echo "0";
			echo $random;
			echo ".css\">\n";
		}else{
			echo "<LINK type=\"text/css\" rel=\"stylesheet\" href=\"/~thrice/archive/other/scripts/style1.css\">\n";
		}

		$tempName = filterName($_GET['name']);
		echo "<script language=\"javascript\">\n";
		echo "var num = 1;\n";
		echo "var base = './spring2004/';\n";
		echo "var name = \"" . strtolower($tempName) . "0\"\n";
		echo "var currImage =	'';\n";
		if(strtolower($tempName) == "nopic")
			echo "var end = \".jpg\"\n";
		else
			echo "var end= \".JPG\"\n";

		echo "function preSet()\n";
		echo "{\n";
		echo "currImage = base + name + num + end;\n";
		echo "profileImage.src = currImage;\n";
		echo "}\n";
		echo "function setImg()\n";
		echo "{\n";
		echo		"if(num == 1)\n";
		echo		"num = 2;\n";
		echo		"else\n";
		echo		"num = 1;\n";
		echo		"currImage = base + name + num + end;\n";
		echo		"profileImage.src = currImage;\n";
		echo "}	\n";
		echo "</script>\n";
	?>
	<title></title>
</head>
<BODY leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" >

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
		$option = -1;
		switch($num){
		case "0.1":
			$option = 0;
			$str = "Name";
			break;
		case "0.2":
			$option = 0;
			$str = "Sex";
			break;
		case "0.3":
			$option = 0;
			$str = "Major";
			break;
		case "0.4":
			$option = 0;
			$str = "Date";
			break;
		case "0.5":
			$option = 0;
			$str = "Length of hair";
			break;
		case "1":
			$option = 1;
			$str = "Why in the world did you join theatre rice?";
			break;
		case "2":
			$option = 1;
			$str = "Do you have any hobbies?  If so please provide vivid descriptions of them.  You must mention at least 2";
				break;
		case "3":
			$option = 1;
			$str = "What do you live for?";
			break;
		case "4":
			$option = 1;
			$str = "What's your favorite song?  How long is it?  How many megabytes?";
			break;
		case "5":
			$option = 1;
			$str = "How old would you ideally like to live until?";
			break;
		case "6":
			$option = 1;
			$str = "What's the worst possible way to die?";
			break;
		case "7":
			$option = 1;
			$str = "Perhaps in the near and unlikely future, Theatre Rice happens upon 922 grand ($923,157 to be exact).<br>" . 
				"  Would you pilfer it?  If so, how would you go about doing so?  Will you cut me in?";
				break;
		case "8":
			$option = 1;
			$str = "Who or what do you think is the most evil person/object in existence?";
			break;
		case "9a":
			$option = 1;
			$str = "What is the most ridiculous question you can think of?";
			break;
		case "9b":
			$option = 1;
			$str = "Now answer the question.";
			break;
		}
		
		if($option == 0){
			if($num == "0.5")
				$option  = 2;
			if($num == "0.1" )
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
		if($option%2 == 0){
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
	  echo "Members\n";
	  echo "</td></tr>\n";
	  echo "</table>\n";
	  echo "<table class=\"tabMain\" cellpadding=\"5\" width=\"650\">\n";
	  echo "<tr>\n";
	foreach($this->records as $member)
	  {		
			if($counter == 0)
				echo "<td>\n";
			if($counter == 20)
				echo "</td><td>\n";
			$this->makeLink($member['membername']);
			$counter++;
	  }
	  echo "</tr></table>";
  }

	function makeLink($memberName){
		$str = $_SERVER['PHP_SELF'] . '?name=' . $memberName;
		echo "> ";
		echo "<a href=\"" . $str . "\">" . $memberName . "</a>\n<br>";
	}
};

//error_reporting(0);		//for supressing errors  enable before launch

function createPicture($file)
{
	echo "<table  width=\"650\">\n";
	echo "	<tr>	<td>\n";
	echo "			<img alt\"click on me!\" title=\"click on me!\" width=\"512\" width=\"384\" id=\"profileImage\" onClick=\"setImg()\" href=\"#\" ><script language=\"javascript\">preSet();</script></img>";
	echo "</td>  </tr>\n";
	echo "</table><br>\n";
}

function noProfile()
{
	echo "<table width=\"512\" class=\"tabTab\" cellpadding=\"5\">";
	echo "	<tr><td align=\"center\">";
	echo "		NO PROFILE AVAILABLE";
	echo "	</td></tr>";
	echo "</table>";
}

function filterName($tempName)
{
	switch($tempName){
		case "Art_Chitamitara":
		case "Krismin_Inocentes":
		case "Sara_Kwon":
			$tempName = "nopic";
			break;
	}
	return $tempName;
}

if ($_GET['name']) {
  // return info on one book
	createPicture(strtolower($_GET['name']));
	$xmlName = "spring2004/" . strtolower($_GET['name']) . ".xml";
	$profile = new MemberProfile($xmlName);
	if(!$profile->show_profile())
		noProfile();
} else {
  // show menu of books
  $profile = new Members("./spring2004/members.xml");
  //$profile->show_profile();
  $profile->show_members();
  echo "<br>";
	
}

?>

<table class="tabMain" width="650" cellspacing="1">
<tr>
	<td><a href="castSpring04.php">&lt; &lt; spring 2004 cast</a>
			&nbsp; | &nbsp; click on the pictures to change them!
</td></tr>
</table>

</body></html>
