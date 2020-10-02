<?php
    $states = "Mississippi Alabama Texas Massachusetts Kansas"; 
    $statesArray = [];
    $states1 = explode(' ',$states);

    echo "<b><u>Original Array</u></b> :<br>";

    foreach ( $states1 as $i => $value )
        print("STATES[$i]=$value<br>");

    foreach($states1 as $state) 
    {
        if(preg_match( '/xas$/', ($state)))
            $statesArray[0] = ($state);
    }
    foreach($states1 as $state)
    {
        if(preg_match('/^k.*s$/i', ($state)))
            $statesArray[1] = ($state);
    }
    foreach($states1 as $state)
    {
        if(preg_match('/^M.*s$/', ($state)))
            $statesArray[2] = ($state);
    }
    foreach($states1 as $state)
    {
        if(preg_match('/a$/', ($state)))
            $statesArray[3] = ($state);
    }
    echo "<br><br><b><u>Resultant Array</u></b> :<br>";

    foreach ( $statesArray as $array => $value )
        print("STATES[$array]=$value<br>");
?>
