<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function uppercasesAllLetters($str) {
  $str = strtoupper($str);
  return $str;
}

// Write your own "tests" below. Refer to the the examples from exercise #1.
echo "\nTesting input 'uppercase me' gets converted to 'UPPERCASE ME'.  Should return 'Success!'\n";
if (uppercasesAllLetters('uppercase me') == 'UPPERCASE ME') {
  echo "\nSuccess!";
}
else{
  echo "\nFailed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting input 'UpPeRcAsE mE' gets converted to 'UPPERCASE ME'.  Should return 'Success!'\n";
if (uppercasesAllLetters('UpPeRcAsE mE') == 'UPPERCASE ME') {
  echo "\nSuccess!";
}
else{
  echo "\nFailed!";
}
echo "\n-------------------------------------------------------------------\n";
echo "\n###################################################################\n";
echo "Tests complete.\n";
?>
