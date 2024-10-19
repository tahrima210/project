<?php
$totalmarks = 232;
$averagemarks = 46.4;
$grade = 100;

 // A+ = 80 - 100, A = 70-79, A- = 60-69, B = 50-59, C = 40-49, D = 33-39, F = Below 33
switch( $grade ) {
    case ($grade >= 90): echo "A+"; break;
    case ($grade >= 80): echo "A"; break;
    case ($grade >= 70): echo "A-"; break;
    case ($grade >= 60): echo "B"; break;
    case ($grade >= 50): echo "C"; break;
    case ($grade >= 40): echo "D"; break;
    case ($grade >= 30): echo "F"; break;
    default: echo "F"; 
     echo $totalmarks;
     echo $averagemarks;
     echo $grade;
     
}
?>