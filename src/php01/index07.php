<?php
function shikaku($teihen , $takasa)
{
    return $teihen * $takasa ;
}
function sankaku($teihen , $takasa)
{
    return $teihen * $takasa / 2 ;
}
function daikei($jouhen,$sita,$takasa)
{
    return ($jouhen + $sita) * $takasa /2 ;
}

echo shikaku(10,10) . "<br>";
echo sankaku(7,8) . "<br>";
echo daikei(10,6,7) ;
