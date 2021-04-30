<?php

$kurlar=simplexml_load_file("https://www.tcmb.gov.tr/kurlar/today.xml");
// print_r($kurlar);   ***bilgiler çekildi.****



$dolar=$kurlar->Currency[0]->BanknoteBuying;      //Doların alış fiyatını bastırır.
$euro=$kurlar->Currency[3]->BanknoteBuying;       // Euronun satış fiyatıı bastırı.



$dolar=str_replace(".",",",$dolar);      // doalrın iççinde "."  bulursan "," çevir.
$euro=str_replace(".",",",$euro);

echo  "Dolar :".$dolar;

echo  "<br>";
echo  "Euro :".$euro;

?>



