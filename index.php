<?php
    require_once 'IP2Location.php';
    
    $ip=$_SERVER['REMOTE_ADDR'];
    $agent=$_SERVER['HTTP_USER_AGENT'];
    $refer=$_SERVER['HTTP-REFERER'];

    # IP2Location Stuff
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
    $latlon=htmlspecialchars($lat) . "," . htmlspecialchars($lon);
    $timezone=$records['timeZone'];
    $zipcode=$records['zipCode'];

    print "<html>";

    print "<head>";
    print "    <meta name='viewport' content='width=device-width, initial-scale=1'>";
    print "    <link rel='stylesheet' href='w3.css'>";
    print "    <link rel='stylesheet' href='w3-colors-metro.css'>";
    print "    <style>";
    print "        p.header {font-weight:bold;}"; 
    print "        div.center {margin: auto; width: 80%; padding: 10px;}";
    print "        td {vertical-align: middle; padding: 15px;)";
    print "        td.mono {font-family: monospace; font-size:18px!important;}";
    print "    </style>";
    print "</head>";

    print "<body>";
    
    print "<div class='w3-container'>";
    print "    <div class='w3-panel w3-card-2 w3-metro-dark-blue'>";
    print "        <h2>This is how your browser appears to other sites.</h2>";
    print "        <p>This page echoes back to you several pieces of data that web sites 'know' about you. It is meant as a situational awareness tool for you to see how your device presents itself to other sites. It also leverages free <a href src='https://lite.ip2location.com/'>IP2Location</a> databases to show your IP location and such. It is not 100% accurate.</p>";
    print "    </div>";
    print "</div>";

    print "  </br>";

    print "  <div class='center w3-panel w3-card-2 w3-round-xlarge'>";
    print "     <table class='w3-table-all'>";
    print "     <h4>General Data:</h4>"; 
    print "         <thead><tr class='w3-light-grey'><th>Item</th><th>Value</th></tr></thead>";
    print "         <tr class='w3-hover-blue'><td class='header'>Your IP Address:</td><td class='mono'>" . $ip . "</td></tr>";
    print "         <tr class='w3-hover-black'><td class='header'>Your User-Agent:</td><td class='mono'>" . htmlspecialchars($agent) . "</td></tr>";
    print "     </table>";
    print "     </br>";
    print "  </div>";

    print "  </br>";
    
    print "  <div class='center w3-panel w3-card-2 w3-round-xlarge'>";
    print "     <h4>IP2Location Data:</h4> <!-- https://github.com/chrislim2888/IP2Location-PHP-Module -->"; 
    print "     <table class='w3-table-all'>";
    print "         <thead><tr class='w3-light-grey'><th>Item</th><th>IP2Location Value</th></tr></thead>";
    print "         <tr class='w3-hover-blue'><td class='header'>Country Name (Code):</td><td class='mono'>" . htmlspecialchars($countryname) . "( " . htmlspecialchars($countrycode) . " )</td></tr>";
    print "         <tr class='w3-hover-black'><td class='header'>City, Region, Zip Code:</td><td class='mono'>" . htmlspecialchars($city) . ", " . htmlspecialchars($region) . '   ' . htmlspecialchars($zipcode) . "</td></tr>";
    print "         <tr class='w3-hover-blue'><td class='header'>Latitude, Longitude:</td><td class='mono'><a href src='https://www.google.com/maps/place/" . $latlon . "' target='_blank'>" . $latlon . "</a></td></tr>";
    print "         <tr class='w3-hover-black'><td class='header'>VPN Status:</td><td class='mono'>" . htmlspecialchars($vpn) . "</td></tr>";
    print "     </table>";
    print "     </br>";
    print "   </div>";
    #print "</div>";

    print "<div class='w3-container'>";
    print "    <div class='w3-panel w3-card-2 w3-metro-dark-blue'>";
    print "        <h4>Details</h4>";
    print "        <p>This site created and maintained by Micah (<a href src='https://twitter.com/webbreacher' target='_blank'>WebBreacher</a>) Hoffman (<a href src='https://webbreacher.com' target='_blank'>https://webbreacher.com</a>). HUGE thank you to the fabulous <a href src='https://www.w3school.com' target='_blank'>https://www.w3school.com</a> site for all their HTML/CSS info.</p>";
    print "    </div>";
    print "</div>";
    print "</body>";
    print "</html>";

?>