<?php
   function avgGrade($studentGrades) {
      $grade1 = round(array_sum($studentGrades['student1'])/3);
      $grade2 = round(array_sum($studentGrades['student2'])/3);
      $grade3 = round(array_sum($studentGrades['student3'])/3);
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
         'Math' => 86,
         'English' => 73,
         'Science' => 83
      ],
   ];
   avgGrade($studentGrades);
?>