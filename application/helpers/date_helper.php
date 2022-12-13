<?php
function formatTanggalYmd($date)
{
     $d = substr($date ,8,2,);
     $m = substr($date ,5,2,);
     $Y = substr($date ,2,2,);
     return $Y.''.$m.''.$d;
}


function indo_currency($nominal)
{
   $result = "Rp "  . number_format($nominal, 2, ',','.');
   return  $result;
    //return 'Rp. ' . number_format($nominal, 0, ",", ".");
}



 function indo_date($date)
{
     $d = substr($date ,8,2,);
     $m = substr($date ,5,2,);
     $Y = substr($date ,0,4,);
     return $d.'/'.$m.'/'.$Y;
     
}

?>