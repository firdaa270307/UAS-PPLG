<?php

$i = array(
    array('batre' => 'melemah', 'sisa' => 24),
    array('batre' => 'hampir melemah', 'sisa' => 50),
    array('batre' => 'Penuh', 'sisa' => 100)
);

foreach ($i as $p) {
    $u = $p['batre'];
    $tersisa = $p['sisa'];

    if ($tersisa > 50) {
        echo "baterai $u baterai anda 100%.";
    }
    elseif ($tersisa > 24) {
        echo "baterai $u baterai anda 50%.";
    } 
    else {
        echo "baterai $u, baterai anda 25%.";
    }
    echo "<br>";
}
?>