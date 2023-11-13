<?php
if ($_SERVER['REQUEST_METHOD']==='POST') {
    $n1 = (int)$_POST['num1'];
    $n2 = (int)$_POST['num2'];
    $operator = $_POST['operator'];
    $result=0;

    switch ($operator) {
        case '+':
            $result=$n1+$n2;       
            break;
        case '-':
            $result=$n1-$n2;       
            break;
        case '*':
            $result=$n1*$n2;       
            break;
        case '/':
            $result=$n1/$n2;       
            break;
    }
    print(sprintf("%d %s %d = %d",$n1,$operator,$n2,$result));
    print("<br><a href='/demo/practical30/index.html'>Back to Home</a>");

}

?>