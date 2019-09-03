<?php
echo "<h3> REFRESH PAGE </h3>";
$fname = 'counter.txt';
if (!file_exists($fname)) {
    $f = fopen($fname, "w");
    fwrite($f, "0");
    fclose($f);
}
$f = fopen($fname, "r");
$hits = fscanf($f, "%d");
fclose($f);
$hits[0]++;
$f = fopen($fname, "w");
fprintf($f, "%d", $hits[0]);
fclose($f);
print "Total number of views: " . $hits[0];
