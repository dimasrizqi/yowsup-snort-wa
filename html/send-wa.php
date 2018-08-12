<?php
$url=$_SERVER['REQUEST_URI'];
header("Refresh: 5; URL=$url");
date_default_timezone_set('Asia/Jakarta');
$ipaddress = '';
if (getenv('HTTP_CLIENT_IP'))
    $ipaddress = getenv('HTTP_CLIENT_IP');
else if(getenv('HTTP_X_FORWARDED_FOR'))
    $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
else if(getenv('HTTP_X_FORWARDED'))
    $ipaddress = getenv('HTTP_X_FORWARDED');
else if(getenv('HTTP_FORWARDED_FOR'))
    $ipaddress = getenv('HTTP_FORWARDED_FOR');
else if(getenv('HTTP_FORWARDED'))
   $ipaddress = getenv('HTTP_FORWARDED');
else if(getenv('REMOTE_ADDR'))
    $ipaddress = getenv('REMOTE_ADDR');
else
    $ipaddress = 'tidak diketahui';
//echo ("$ipaddress \n");
$nomor="628989541406";

//exec('/var/www/html/yowsup/yowsup-cli demos -c /var/www/html/yowsup/pengaturan -s "628989541406" "Terjadi BRUTE FORCE ATACK pada server dari ip 10.10.10.12."');
$kalimat = file_get_contents("/var/log/auth.log",NULL);
if(preg_match("/icmp/i", $kalimat)) {
exec('/var/www/html/yowsup/yowsup-cli demos -c /var/www/html/yowsup/pengaturan -s "628989541406" "Terjadi DOS ATACK pada server dari ip 10.10.10.12."');
	echo 'Notifikasi dos attack telah dikirim';
	echo "<br>";
}if (preg_match("/ftp/i",$kalimat)){
exec('/var/www/html/yowsup/yowsup-cli demos -c /var/www/html/yowsup/pengaturan -s "628989541406" "Terjadi FTP BRUTE FORCE ATACK pada server dari ip 10.10.10.12."');
	echo "Notifikasi ftp brute force telah dikirim";
	echo "<br>";
}if  (preg_match("/mysql/i",$kalimat)){
	exec('/var/www/html/yowsup/yowsup-cli demos -c /var/www/html/yowsup/pengaturan -s "628989541406" "Terjadi MYSQL BRUTE FORECE ATACK pada server dari ip 10.10.10.12."');
	echo "Notifikasi mysql brute force telah dikirim";
	echo "<br>";
}else {
	echo "tidak ada serangan";
}

exec('echo "" > /var/log/auth.log');
?>
