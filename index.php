<?php
    $ip=$_SERVER['REMOTE_ADDR'];
    $agent=$_SERVER['HTTP_USER_AGENT'];
    $refer=$_SERVER['HTTP-REFERER'];

    print "<html>";

    print "<head>";
    print "    <meta name='viewport' content='width=device-width, initial-scale=1'>";
    print "    <link rel='stylesheet' href='w3.css'>";
    print "    <link rel='stylesheet' href='w3-colors-metro.css'>";
    print "    <style>";
    print "        p.header {font-weight:bold;}"; 
    print "        p.mono {font-family: monospace; font-size:18px!important;}";
    print "    </style>";
    print "</head>";

    print "<body>";

    print "<div class='w3-container'>";
    print "  <h2>This is how your browser appears to other sites.</h2>";
    print "  <p>This page echoes back to you several pieces of data that web sites 'know' about you. It is meant as a situational awareness tool for you to see how your device presents itself to other sites.</p>";
    print "  </br>";

    print "  <div class='w3-panel w3-card-2 w3-round-xlarge'><p class='header'>External IP:</p><p class='mono'> " . $ip . "</p></div>";
    print "  <div class='w3-panel w3-card-2 w3-round-xlarge'><p class='header'>User-Agent:</p><p class='mono'> " . htmlspecialchars($agent) . "</p></div>";
    print "  <div class='w3-panel w3-card-2 w3-round-xlarge'><p class='header'>HTTP Referrer:</p><p class='mono'> " . htmlspecialchars($refer) . "</p></div>";

    print "</div>";
    print "<div class='w3-container'>";
    print "    <div class='w3-panel w3-card-2 w3-metro-dark-blue'>";
    print "        <h4>Details</h4>";
    print "        <p>This site created and maintained by Micah (<a href src='https://twitter.com/webbreacher' target='_blank'>WebBreacher</a>) Hoffman (<a href src='https://webbreacher.com' target='_blank'>https://webbreacher.com</a>). HUGE thank you to the fabulous <a href src='https://www.w3school.com' target='_blank'>https://www.w3school.com</a> site for all their HTML/CSS info.</p>";
    print "    </div>";
    print "</div>";
    print "</body>";
    print "</html>";

?>