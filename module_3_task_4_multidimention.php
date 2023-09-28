<?php
   function findGrade($marks){
      if ($marks<100 && $marks>95) {
         $grade =  "AA";
      } 
      elseif ($marks<95 && $marks>85) {
         $grade =  "A";
      }
      elseif ($marks<85 && $marks>75) {
         $grade =  "B";
      }
      elseif ($marks<75 && $marks>65) {
         $grade =  "C";
      }
      return $grade;    
   }
   function avgGrade($studentGrades){
      $marks1 = round(array_sum($studentGrades['student1'])/3);
      $marks2 = round(array_sum($studentGrades['student2'])/3);
      $marks3 = round(array_sum($studentGrades['student3'])/3);
      $grade1 = findGrade($marks1);
      $grade2 = findGrade($marks2);
      $grade3 = findGrade($marks3);
      echo "First student grade is {$grade1} \n";
      echo "Second student grade is {$grade2} \n";
      echo "Third student grade is {$grade3}";
   }
   $studentGrades = [
      'student1' => [
         'Math' => 91,
         'English' => 72,
         'Science' => 83
      ],
      'student2' => [
         'Math' => 96,
         'English' => 77,
         'Science' => 88
      ],
      'student3' => [
         'Math' => 79,
         'English' => 73,
         'Science' => 77
      ],
   ];
   avgGrade($studentGrades);
?>
