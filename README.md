mikrotik-gps
============

Scripts for tracking Mikrotik Routers by sending GPS coordinates to an e-mail address.

Requires a Mikrotik RoutherBoard + USB GPS device or LTE modem with built-in GPS receiver.

gpt-to-email script code originaly from the Mikrotik Wiki:-
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

Branch gps-moredetails
----------------------

This script adds to the information sent by the gps-to-email script.

Adding:-
* ETHER1 MAC address
* LTE1 signal strength
* LTE1 network technology (GPRS/3G/LTE)
* GPS date and time stamp 
