<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function isGreaterThanFive($num) {
  if ($num > 5){
    return true;
  }
  else {
  return false;
  }
}

// Write your own "tests" below. A couple examples are provided for you.

echo "\nTesting that 18 is greater than 5. Should return true.\n";
if (isGreaterThanFive(18) == true) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting that 3 is greater than 5. Should return false.\n";
if (isGreaterThanFive(3) == true) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting that 5 is not greater than 5. Should return false.\n";
if (isGreaterThanFive(5) == true) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\n###################################################################\n";
echo "Tests complete.\n";
