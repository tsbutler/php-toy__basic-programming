<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function filterNumbers($arr) {
  $new_arr = array();
  foreach($arr as $value) {
    if ($value < 10){
      array_push($new_arr, $value);
    }
  }
  return $new_arr;
}

// Write your own "tests" below. Refer to the the examples from exercise #1.
echo "\nTesting that (30, 5, 9, 10, 11) filters to (5,9). Should return true.\n";

$arr = array(30, 5, 9, 10, 11);
$result = array(5,9);

if (filterNumbers($arr) == $result) {
  echo "\nSuccess!";
}
else{
  echo "\nFailed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\n###################################################################\n";
echo "Tests complete.\n";
?>