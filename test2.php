<?php 


    function candidateResponse($candidateResponse,$correctResponse = 'There are twenty-four hours in a day, 30 days in a month, and 12 months in the calendar year')
    {
        $candidateArr =  explode(' ', $candidateResponse);
        $correctArr = explode(' ',$correctResponse);
        
        $sum = 0;
        foreach ($candidateArr as $key => $value) {
          if (is_numeric($value)) {
            if (in_array($value, $correctArr)) {
              $sum = $sum + 4;

            }
          }
          else {
            // echo strtolower($value)."<br>";
            if (in_array(strtolower($value), array_map('strtolower', $correctArr))) {
             
              if (strlen($value)>7) {
                $sum = $sum + 3;
                //echo $value."Matched 3<br>";
              }
              elseif (strlen($value)<5) {
                $sum = $sum + 0;
                //echo $value."Matched 0<br>";
              }
              else{
                $sum = $sum + 1;
                //echo $value."Matched 1<br>";
              }
            }
          }
         
        }
        return $sum;
    }

    function candidateMaximumScore($correctResponse = 'There are twenty-four hours in a day, 30 days in a month, and 12 months in the calendar year')
    {
          $correctArr = explode(' ',$correctResponse);
          $sum = 0;
          foreach ($correctArr as $key => $value) {
            if (is_numeric($value)) {
              $sum = $sum + 4;
            }
            else{
              if (strlen($value)>7) {
                $sum = $sum + 3;
              }
              elseif (strlen($value)<=5) {
                $sum = $sum + 0;
              }
              else{
                $sum = $sum + 1;
              }
            }
          }
          return $sum;
      }
    
    $maxScore =  candidateMaximumScore();
    $candidateScore =  candidateResponse("There are Twenty-Four hours in a day. A year has 14 months");
    echo "<h1> Candidate Score Percentage : ".(($candidateScore / $maxScore) * 100)."</h1>"; 

    die;









?>