mikrotik-gps
============

Scripts for tracking Mikrotik Routers by sending GPS coordinates to an e-mail address.

Requires a Mikrotik RoutherBoard + USB GPS device or LTE modem with built-in GPS receiver.

Testing done using a RB912UAG-2HPnD with Sierra Wireless MC7710 (FW version needs to be "03.05.24" and GPS autostart NMEA output needs to be enabled. See "MC7710-enable-gps.txt" for instructions.

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
