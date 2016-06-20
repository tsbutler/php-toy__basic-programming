<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function addUpNumbers($arr) {
  $summed_up = array_sum($arr);
  return $summed_up;
}

// Write your own "tests" below. Refer to the the examples from exercise #1.
echo "\nTesting that the sum of the elements of array (1,2,3) equals 6. Should return true.\n";

$arr = array(1,2,3);

if (addUpNumbers($arr) == 6) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\n###################################################################\n";
echo "Tests complete.\n";
?>
