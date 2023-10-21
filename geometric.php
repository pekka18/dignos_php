<?php
$n2 = 7;
function geometric($n)
{
    for ($i = 0; $i < $n; $i++)
    {
        $n2 = 1 * pow(2, $i);
        echo $n2, " ";
    }
}
    geometric($n2);
?>