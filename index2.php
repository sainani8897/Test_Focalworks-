<?php 

function StringChallenge($str) {

  // code goes here
  $result = str_split($str);
  print_r($result);
  $sum = 0;
  foreach($result as $key => $val){
    $sum = $sum + getRomanValue($val);
  }
  if($sum > )
  
  return $str;

}

function getRomanValue($char){
  switch($char){
    case 'I':
      return 1;
      break;
    case 'V':
      return 5;
      break;
    case 'X':
      return 10;
      break;
    case 'L':
      return 50;
      break;
    case 'C':
      return 100;
      break;
    case 'D':
      return 500;
      break;
    case 'M':
      return 1;
      break;
    default:
      return 0; 
  }
}
   
// keep this function call here  
echo StringChallenge(fgets(fopen('php://stdin', 'r')));  

?>