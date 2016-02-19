<?php
$x = $_REQUEST['x'];
$y = $_REQUEST['y'];
if (is_numeric($x) && is_numeric($y) && preg_match('/^[-+]?\d+$/',$x) && preg_match('/^[-+]?\d+$/',$y)) {
    $x = (int)$x;
    $y = (int)$y;
    if (is_int($x) && is_int($y)) {
        $neg = (($x >= 0 && $y >= 0) || ($x < 0 && $y < 0))? "" : "-";
        $ret = 0;
        $c = 0;
        $ax = abs($x); $ay = abs($y);
        while ($c < $ay) {
            $ret += $ax;
            $c++;
        }
        echo $neg.$ret;
    }
    else echo "";
}
else echo "";
