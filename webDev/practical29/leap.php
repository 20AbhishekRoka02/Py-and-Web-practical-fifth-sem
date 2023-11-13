<?php
if ($_SERVER['REQUEST_METHOD']==='POST') {
 $year = (int) $_POST['year'];

 if (($year%4==0 && $year%100 !=0) || ($year%400==0)){
    echo "It is a leap year. <br>";
 } 
 else {
    echo "It is not a leap year. <br>";
 }
 echo "<a href='/demo/practical29/index.html'>Back to home</a>";
}
?>