<?php

function sikaku($base, $height)
{
  return $base * $height;
}
function getTriangleArea($base, $height)
{
  return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}

echo sikaku(5, 5)  ;
echo getTriangleArea(7, 8) ;
echo getTrapezoidArea(4, 5, 4);

