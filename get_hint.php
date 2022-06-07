<?php
// Array with hijab
$a[] = "Bawal";
$a[] = "Chiffon";
$a[] = "Printed";
$a[] = "Jersey";
$a[] = "Pashmina";
$a[] = "Instant";
$a[] = "Sarung";
$a[] = "Satin";
$a[] = "Shawl";
$a[] = "Batik";
$a[] = "Halfmoon";
$a[] = "Cotton";
$a[] = "Lycra";

// get the q parameter from URL
$q = $_GET["q"];

$hint = "";
//$option_hint = "";

if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// lookup all hints from array if $q is different from ""
/*if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $hijab) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
		//$option_hint = "<option>".$hijab."</option";
      } else {
        $hint .= ", $hijab";
		//$option_hint = "<option>".$hijab."</option";
      }
	  if ($option_hint === "") {
        //$hint = $hijab;
		$option_hint = "<option>".$hijab."</option>";
      } else {
        //$hint .= ", $name";
		$option_hint = "<option>".$hijab."</option>";
    }
  }
}
*/
// Output "no suggestion" if no hint was found or output correct values
//echo $hint === "" ? "no suggestion" : $hint;
echo $hint === "" ? "<option>no suggestion" : $hint;
?>