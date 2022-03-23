<?php
//error_reporting(0);
date_default_timezone_set("Asia/Jakarta");

for ($i= 1; $i <= 1; $i++)
{


    $filecounter=("counter.txt");
    $kunjungan=file($filecounter);
    $kunjungan[0]++;
        $file=fopen($filecounter,"w");
        fputs($file,"$kunjungan[0]");
                fclose($file);
$string = file_get_contents('logs.txt');
$stringArr = explode("\n", $string);
    $file = "logs.txt";

$string = ''.$stringArr[$kunjungan[0]++].'';
$string = trim(preg_replace('/\s\s+/', ' ', $string));
$file = fopen("contoh.txt","w");  

$cookie = ''; //COOKIE
$fb_dtsg ='';

$url       = "https://mbasic.facebook.com/a/delete.php?perm&story_permalink_token=S:_I100001070779111:$string&continue=/stories.php#s_dafdd532ecb79b776082619b44e634a0&gfid=AQD5_F3lgu_mM15vySk";
$headers   = array(
    'authority: mbasic.facebook.com',
    'method: POST',
    'path: /a/delete.php?perm&story_permalink_token=S:_I100001070779111:2102974716414867&continue=/stories.php#s_dafdd532ecb79b776082619b44e634a0&gfid=AQD5_F3lgu_mM15vySk',
    'scheme: https',
    'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,','image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
    'accept-encoding: gzip, deflate, br',
    'accept-language: en-US,en;q=0.9,id;q=0.8',
    'cache-control: max-age=0',
    'content-type: application/x-www-form-urlencoded',
    'Cookie: '.$cookie,
    'origin: https://mbasic.facebook.com',
    'referer: https://www.facebook.com',
    'sec-ch-ua: " Not A;Brand";v="99", "Chromium";v="99", "Google Chrome";v="99"',
    'sec-ch-ua-mobile: ?0',
    'sec-ch-ua-platform: "Windows"',
    'sec-fetch-dest: document',
    'sec-fetch-mode: navigate',
    'sec-fetch-site: same-origin',
    'sec-fetch-user: ?1',
    'upgrade-insecure-requests: 1',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.74 Safari/537.36'
);
$post      = "$fb_dtsg"; 

}
$post      = json_decode(yarzCurl($url, $post, false, $headers, true));
print ''.print_r($string).''; die();



function yarzCurl($url, $fields = false, $cookie = false, $httpheader = false, $encoding = false)


{
    $ch = curl_init();
    sleep(1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    if ($fields !== false) {
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    }
    if ($encoding !== false) {
        curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    }
    if ($cookie !== false) {
        curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
        curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
    }
    if ($httpheader !== false) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
    }
    
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
} 

