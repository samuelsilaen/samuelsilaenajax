<?php

$a[] = "Murad";
$a[] = "Algi mastah";
$a[] = "Valhein";
$a[] = "Zanis";
$a[] = "LuBu";
$a[] = "Max";
$a[] = "Muhammad Alif Siraj";

$q = $_REQUEST["q"];

$hint = "";

if ($q !== "") {
	$q = strtolower($q);
	$len=strlen($q);
	foreach($a as $name) {
		if (stristr($q, substr($name, 0, $len))){
			if ($hint === ""){
				$hint = $name;
			} else {
				$hint .= ", $name";
			
			}
		}
	}
}

echo $hint === "" ? "no suggestion" : $hint;
?>
