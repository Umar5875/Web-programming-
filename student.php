<?php
$students = array("Arun", "Binu", "Kiran", "Deepa", "Jose");

echo "<h3>Original Array:</h3>";
print_r($students);

asort($students);
echo "<h3>Array Sorted in Ascending Order (asort):</h3>";
print_r($students);

arsort($students);
echo "<h3>Array Sorted in Descending Order (arsort):</h3>";
print_r($students);
?>

