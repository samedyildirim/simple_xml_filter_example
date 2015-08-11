<?php
$xml = file_get_contents('../data.xml');

$urun_pattern = '$(<Urun>.*</Urun>)$Us';
$stok_pattern = '$<StokAdedi>(.*)</StokAdedi>$Us';

preg_match_all($urun_pattern, $xml,$Urunler);

echo "<Urunler>\n";
foreach ($Urunler[1] as $Urun) {
  preg_match($stok_pattern, $Urun, $StokAdedi);
  if($StokAdedi[1] != "0"){
    echo $Urun . "\n";
  }
}
echo "</Urunler>";