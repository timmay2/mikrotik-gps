mikrotik-gps
============

Scripts for tracking Mikrotik Routers using GPS

gps-to-email
------------

Script to send the GPS coordinated to an e-mail address.
E-mails are only sent when the position has changed.
The script has the be scheduled to run using "system scheduler". depending on requirements this could be scheduled to run the gps-to-email script every 20 seconds, 5 minutes, 30 minutes, hour or daily; for example.

gps-moredetails-to-email
-------------------------------

This script adds to the information sent by the gps-to-email script.

Adding:-
* ETHER1 MAC address
* LTE1 signal strength
* LTE1 network technology (GPRS/3G/LTE)
* GPS date and time stamp 
