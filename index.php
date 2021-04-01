<?php
    #$ip=$_SERVER['REMOTE_ADDR']; // Not used when hosted through CloudFlare/Proxy
    $fwd=$_SERVER['HTTP_X_FORWARDED_FOR'];
    $agent=htmlspecialchars($_SERVER['HTTP_USER_AGENT']);
    $refer=htmlspecialchars($_SERVER['HTTP_REFERER']);

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
    print "        <p>This page echoes back to you several pieces of data that web sites 'know' about you. It is meant as a situational awareness tool for you to see how your device presents itself to other sites. To see even more data about your or another IP address, try running the IP2Location Demo <a href='https://www.ip2location.com/demo' target='_blank'>by clicking here</a>.</p>\n";
    print "    </div>\n";
    print "</div>\n";
    print "  <div class='center w3-panel w3-card-2 w3-round-xlarge'>\n";
    print "     <table class='w3-table-all'>\n";
    print "     <h4>General Data:</h4>\n";
    print "         <thead><tr class='w3-light-grey'><th>Item</th><th>Value</th></tr></thead>\n";
    print "         <tr class='w3-hover-blue'><td class='header'>Your IP Address:</td><td class='mono'>$fwd</td></tr>\n";
    print "         <tr class='w3-hover-black'><td class='header'>Your User-Agent:</td><td class='mono'>$agent</td></tr>\n";
    print "         <tr class='w3-hover-blue'><td class='header'>HTTP Referrer:</td><td class='mono'>$refer</td></tr>\n";
    print "     </table>\n";
    print "     </br>\n";
    print "  </div>\n";
    print "  </br>\n";
    print "<div class='w3-container'>\n";
    print "    <div class='w3-panel w3-card-2 w3-metro-dark-blue'>\n";
    print "        <p>This site created and maintained by Micah (<a href='https://twitter.com/webbreacher' target='_blank'>WebBreacher</a>) Hoffman. HUGE thank you to the fabulous <a href='https://www.w3schools.com' target='_blank'>https://www.w3schools.com</a> site for all their HTML/CSS info.</p>\n";
    print "        <p style='font-size:70%;'>v1.3</p>\n";
    print "        <p style='font-size:70%;'>Favicon by <a href='https://freeicons.io/profile/714'>Raj Dev</a> on <a href='https://freeicons.io'>freeicons.io</a></p>\n";
    print "    </div>\n";
    print "</div>\n";
    print "<!-- Thanks for reading all the way down to the bottom and looking at my code! --- Micah -->\n";
    print "</body>\n";
    print "</html>\n";
?>
