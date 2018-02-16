<?php

require_once "Single.php";

// Only one instance is ever generated and is used throughout the code
// Useful when the instance is huge and no need to generate new ones

$single = Single::instance();

$anotherSingle = Single::instance();

if($single === $anotherSingle) {

  echo "One instance \n";

}

?>
