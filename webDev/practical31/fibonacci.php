<?php
if ($_SERVER['REQUEST_METHOD']==='POST') {
    $limit = (int)$_POST['limit'];

    $a = 0;
    $b = 1;
    $step=0;
    while ($step < $limit) {
        print(sprintf("%d<br>",$a));
        $temp = $a + $b;
        $a = $b;
        $b = $temp;
        $step++;
    
    }
    echo "<a href='/demo/practical31/index.html'>Back to home</a>";
}
