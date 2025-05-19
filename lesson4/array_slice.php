<?php
 
 $sports = ['Tesnnis','Football', 'Basketball', 'Handball', 'Voleyball','Golf', 'Tennis'];
 
    $output1 = array_slice($sports, 2);
    $output1 = array_slice($sports, -2,1);
    $output1 = array_slice($sports, 0,3);

    var_dump($output1, $output2, $output3);

 ?>