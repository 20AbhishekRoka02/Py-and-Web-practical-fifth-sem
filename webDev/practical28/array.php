<?php

if ($_SERVER['REQUEST_METHOD']==='POST') {
    $a2darray = array(
        array(1,2,3,4),
        array(34,56,78,90),
        array(12,34,56),
        array(56,78,14)
    );

    $num = (int) $_POST['number'];
    // $num = (int) $num;
    $stop = 0;
    foreach ($a2darray as $val) {
        foreach ($val as $element) {
            if ($num===$element) {
                echo 'Voila! $num is in the array.';
                echo '<br>';
                $stop=1;
                break;
            }            
        }
        if ($stop==1) {
            break;
        }
    }
    if ($stop==0) {
        echo 'Better luck next time';
        echo '<br>';
    }

    echo "<a href='/demo/practical28/index.html'>Back to home</a>";



}

?>