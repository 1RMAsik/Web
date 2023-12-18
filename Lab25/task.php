<?php
$originalArray = range(3, 3 + 7 * 29, 7);

$copiedArray = $originalArray;

shuffle($copiedArray);


echo "<table>";
for ($i = 0; $i < 30; $i++) {
    echo "<tr><td width='60'>{$originalArray[$i]}</td><td>{$copiedArray[$i]}</td></tr>";
}
echo "</table>";


echo "<p>Indices of matching elements:</p>";
for ($i = 0; $i < 30; $i++) {
    if ($originalArray[$i] == $copiedArray[$i]) {
        echo "<p>$i</p>";
    }
}
?>