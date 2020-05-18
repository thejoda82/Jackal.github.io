<?php
$file = fopen ("http://roedor.xyz/REGIO2020/mc.php?c=96&f.m3u8", "r");
$filemeu = fopen ("ID.m3u8", "wb");
while (!feof ($file)) {
    $line = fgets ($file, 1024);
    $pos = strrpos($line, "#");
    if ($line[0] == "#") {
        fwrite($filemeu, $line . PHP_EOL);
        echo $line . "\n";
    } else {
        fwrite($filemeu, "http://roedor.xyz/REGIO2020/".$line . PHP_EOL);
        echo "http://roedor.xyz/REGIO2020/".$line . "\n";
    }

}
fclose($file);
fclose($filemeu);
?>