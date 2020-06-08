<?php
    require_once 'IP2Location.php';

    $ip=$_SERVER['REMOTE_ADDR'];
    $agent=htmlspecialchars($_SERVER['HTTP_USER_AGENT']);
    $refer=htmlspecialchars($_SERVER['HTTP_REFERER']);

    // Web Service
    $ws = new \IP2Location\WebService('demo', 'WS24', false);
    $records = $ws->lookup($ip, [
        'continent', 'country', 'region', 'city', 'geotargeting', 'country_groupings', 'time_zone_info',
    ], 'en');

    $countrycode=htmlspecialchars($records['country_code']);
    $countryname=htmlspecialchars($records['country_name']);
    $region=htmlspecialchars($records['region_name']);
    $city=htmlspecialchars($records['city_name']);
    $lat=htmlspecialchars($records['latitude']);
    $lon=htmlspecialchars($records['longitude']);
    $zipcode=htmlspecialchars($records['zip_code']);
    $timecode=htmlspecialchars($records['time_code']);
    $isp=htmlspecialchars($records['isp']);
    $net_speed=htmlspecialchars($records['net_speed']);
    $areacode=htmlspecialchars($records['area_code']);
    $usageType=htmlspecialchars($records['usage_type']);
    $latlon=htmlspecialchars($lat) . ", " . htmlspecialchars($lon);
    $timezone=htmlspecialchars($records['timeZone']);

    print "<html>\n";
    print "<head>\n";
    print "    <meta name='viewport' content='width=device-width, initial-scale=1'>\n";
    print "    <link rel='stylesheet' href='w3.css'>\n";
    print "    <link rel='stylesheet' href='w3-colors-metro.css'>\n";
    print "    <style>\n";
    print "        p.header {font-weight:bold;}\n";
    print "        div.center {margin: auto; width: 80%; padding: 10px;}\n";
    print "        td {vertical-align: middle; padding: 15px;)\n";
    print "        td.mono {font-family: monospace; font-size:18px!important;}\n";
    print "    </style>\n";
    print "</head>\n";
    print "<body>\n";

    print "<div class='w3-container'>\n";
    print "    <div class='w3-panel w3-card-2 w3-metro-dark-blue'>\n";
    print "        <h2>This is how your browser appears to other sites.</h2>\n";
    print "        <p>This page echoes back to you several pieces of data that web sites 'know' about you. It is meant as a situational awareness tool for you to see how your device presents itself to other sites. It also leverages free <a href='https://lite.ip2location.com/'>IP2Location</a> databases to show your IP location and such. It is not 100% accurate.</p>\n";
    print "    </div>\n";
    print "</div>\n";

    print "  <div class='center w3-panel w3-card-2 w3-round-xlarge'>\n";
    print "     <table class='w3-table-all'>\n";
    print "     <h4>General Data:</h4>\n";
    print "         <thead><tr class='w3-light-grey'><th>Item</th><th>Value</th></tr></thead>\n";
    print "         <tr class='w3-hover-blue'><td class='header'>Your IP Address:</td><td class='mono'>$ip</td></tr>\n";
    print "         <tr class='w3-hover-black'><td class='header'>Your User-Agent:</td><td class='mono'>$agent</td></tr>\n";
    print "         <tr class='w3-hover-blue'><td class='header'>HTTP Referrer:</td><td class='mono'>$refer</td></tr>\n";
    print "     </table>\n";
    print "     </br>\n";
    print "  </div>\n";
    print "  </br>\n";

    print "  <div class='center w3-panel w3-card-2 w3-round-xlarge'>\n";
    print "     <h4>IP2Location Data:</h4> <!-- https://github.com/chrislim2888/IP2Location-PHP-Module -->\n";
    print "     <table class='w3-table-all'>\n";
    print "         <thead><tr class='w3-light-grey'><th>Item</th><th>IP2Location Value</th></tr></thead>\n";
    print "         <tr class='w3-hover-blue'><td class='header'>Country Name (Code):</td><td class='mono'>$countryname ( $countrycode )</td></tr>\n";
    print "         <tr class='w3-hover-black'><td class='header'>City, Region, Zip Code:</td><td class='mono'>$city, $region    $zipcode</td></tr>\n";
    print "         <tr class='w3-hover-blue'><td class='header'>Latitude, Longitude:</td><td class='mono'>$latlon</td></tr>\n";
    //print "         <tr class='w3-hover-black'><td class='header'>VPN Status:</td><td class='mono'>$vpn</td></tr>\n";
    //print "         <tr class='w3-hover-black'><td class='header'>Proxy Type:</td><td class='mono'>$proxyType</td></tr>\n";
    print "         <tr class='w3-hover-black'><td class='header'>ISP and Net Speed:</td><td class='mono'>$isp, $net_speed</td></tr>\n";
    print "         <tr class='w3-hover-black'><td class='header'>Usage Type:</td><td class='mono'>$usageType</td></tr>\n";
    print "     </table>\n";
    print "     </br>\n";
    print "   </div>\n";

    print "<div class='w3-container'>\n";
    print "    <div class='w3-panel w3-card-2 w3-metro-dark-blue'>\n";
    print "        <h4>Details</h4>\n";
    print "        <p>This site created and maintained by Micah (<a href='https://twitter.com/webbreacher' target='_blank'>WebBreacher</a>) Hoffman (<a href='https://webbreacher.com' target='_blank'>https://webbreacher.com</a>). HUGE thank you to the fabulous <a href='https://www.w3school.com' target='_blank'>https://www.w3school.com</a> site for all their HTML/CSS info. Code for this site is available at <a href='https://github.com/WebBreacher/whatuinfo'>https://github.com/WebBreacher/whatuinfo</a></p>\n";
    print "    </div>\n";
    print "</div>\n";
    print "<!-- Thanks for reading all the way down to the bottom and looking at my code! --- Micah -->\n";
    print "</body>\n";
    print "</html>\n";

?>
