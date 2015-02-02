mikrotik-gps
============

Scripts for tracking Mikrotik Routers by sending GPS coordinates to an e-mail address.

Requires a Mikrotik RoutherBoard + USB GPS device or LTE modem with built-in GPS receiver.

gps-to-email script originally from the Mikrotik Wiki:-
http://wiki.mikrotik.com/wiki/GPS_text_file_converter_to_Google_Earth/Maps

Testing done using a RB912UAG-2HPnD with Sierra Wireless MC7710 (FW version needs to be "03.05.24" and GPS autostart NMEA output needs to be enabled. See "MC7710-enable-gps.txt" for instructions.

/!\ PLEASE NOTE /!\
-------------

The GPS package doesn't work correctly in the current firmware release (RouterOS v6.24) you'll need to upgrade to "RouterOS v6.25rc" once available and the final release as soon as that is available.

gps-to-email
------------

Script to send the GPS coordinated to an e-mail address.
E-Mails are only sent when the position has changed.
The script has to be scheduled to run using "system scheduler". Depending on your requirements this could be scheduled to run the gps-to-email script every 20 seconds, 5 minutes, 30 minutes, hour or daily.

gps-to-url
----------

This script is a modified version of the above gps-to-email script. Instead of sending an e-mail it uses fetch to request a URL. This URL is the "mikrotikgps.php" file which uses php GET to get the data from the URL and push it into a database. This makes it possible to then use this infor to build a map using the coordinates and other data. 
