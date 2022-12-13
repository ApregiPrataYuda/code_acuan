<?php 
function gbram($GB)
{
   $result = "gb"  . number_format($GB, 2, ',','.');
   return  $result;
}