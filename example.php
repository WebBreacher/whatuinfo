<?php
require_once 'IP2Location.php';
/*
   Cache whole database into system memory and share among other scripts & websites
   WARNING: Please make sure your system have sufficient RAM to enable this feature
*/
// $db = new \IP2Location\Database('./databases/IP-COUNTRY-SAMPLE.BIN', \IP2Location\Database::SHARED_MEMORY);

/*
   Cache the database into memory to accelerate lookup speed
   WARNING: Please make sure your system have sufficient RAM to enable this feature
*/
// $db = new \IP2Location\Database('./databases/IP-COUNTRY-SAMPLE.BIN', \IP2Location\Database::MEMORY_CACHE);


/*
	Default file I/O lookup
*/
#$db = new \IP2Location\Database('./databases/IP2LOCATION-LITE-DB11.BIN', \IP2Location\Database::FILE_IO);
$db = new \IP2Location\Database('./databases/IP2PROXY-LITE-PX4.BIN', \IP2Location\Database::FILE_IO);
$ip=$_SERVER['REMOTE_ADDR'];
$records = $db->lookup($ip, \IP2Location\Database::ALL);
$vpn=$records['countryCode'];

$db = new \IP2Location\Database('./databases/IP2LOCATION-LITE-DB11.BIN', \IP2Location\Database::FILE_IO);
$ip=$_SERVER['REMOTE_ADDR'];
$records = $db->lookup($ip, \IP2Location\Database::ALL);
$countrycode=$records['countryCode'];
$countryname=$records['countryName'];
$region=$records['regionName'];
$city=$records['cityName'];
$lat=$records['latitude'];
$lon=$records['longitude'];
$timezone=$records['timeZone'];
$zipcode=$records['zipCode'];



?>
