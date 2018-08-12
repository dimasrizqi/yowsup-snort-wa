<?php
$url=$_SERVER['REQUEST_URI'];
header("Refresh: 5; URL=$url");
$kalimat = file_get_contents("/var/log/auth.log",NULL);
if(preg_match("/Pergi/i", $kalimat)) {
  echo 'Ketemu: pergi';
} if (preg_match("/andi/i",$kalimat)){
echo "ketemu : andi";
}
 else {
  echo 'Tidak Ketemu';
}
?>
