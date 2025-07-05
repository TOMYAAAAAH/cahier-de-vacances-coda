<?php

$horizontal=0;
$depth=0;

$rawFile = file_get_contents(__DIR__ . "/submarine.txt") or die("Unable to open file");

$lines = explode(PHP_EOL, $rawFile);

foreach($lines as $line){
    [$command, $value] = explode(" ", $line);
    if ($command==="forward") {
        $horizontal+=$value;
    } elseif ($command==="up") {
        $depth-=$value;
    } elseif ($command==="down") {
        $depth+=$value;
    }
}

echo $horizontal," x ",$depth," = ",$horizontal*$depth;

test('should move on given text instructions', function () {
    // TODO: Implement the submarine logic and replace this placeholder value
    expect($horizontal*$depth)->toBe(1690020, 'it is universal answer');
});

?>