<?php

    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    
foreach($age as $x => $x_value) {
    echo "<tr><td>Key=" . $x . "</td>";
    echo "<td>Value=" . $x_value . "</td></tr>";
}

?>
    