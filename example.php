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

echo '<pre>';
echo 'IP Number             : ' . $records['ipNumber'] . "\n";
echo 'IP Version            : ' . $records['ipVersion'] . "\n";
echo 'IP Address            : ' . $records['ipAddress'] . "\n";
echo 'Country Code          : ' . $records['countryCode'] . "\n";
echo 'Country Name          : ' . $records['countryName'] . "\n";
echo 'Region Name           : ' . $records['regionName'] . "\n";
echo 'City Name             : ' . $records['cityName'] . "\n";
echo 'Latitude              : ' . $records['latitude'] . "\n";
echo 'Longitude             : ' . $records['longitude'] . "\n";
echo 'Time Zone             : ' . $records['timeZone'] . "\n";
echo 'ZIP Code              : ' . $records['zipCode'] . "\n";
echo 'Domain Name           : ' . $records['domainName'] . "\n";
echo 'ISP Name              : ' . $records['isp'] . "\n";
echo '</pre>';

$db = new \IP2Location\Database('./databases/IP2LOCATION-LITE-DB11.BIN', \IP2Location\Database::FILE_IO);
$ip=$_SERVER['REMOTE_ADDR'];
$records = $db->lookup($ip, \IP2Location\Database::ALL);

echo '<pre>';
echo 'IP Number             : ' . $records['ipNumber'] . "\n";
echo 'IP Version            : ' . $records['ipVersion'] . "\n";
echo 'IP Address            : ' . $records['ipAddress'] . "\n";
echo 'Country Code          : ' . $records['countryCode'] . "\n";
echo 'Country Name          : ' . $records['countryName'] . "\n";
echo 'Region Name           : ' . $records['regionName'] . "\n";
echo 'City Name             : ' . $records['cityName'] . "\n";
echo 'Latitude              : ' . $records['latitude'] . "\n";
echo 'Longitude             : ' . $records['longitude'] . "\n";
echo 'Time Zone             : ' . $records['timeZone'] . "\n";
echo 'ZIP Code              : ' . $records['zipCode'] . "\n";
echo 'Domain Name           : ' . $records['domainName'] . "\n";
echo 'ISP Name              : ' . $records['isp'] . "\n";
echo '</pre>';
?>
