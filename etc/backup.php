;<?/*
;###########################################################################
;#
;# config.ini.php -  NagTrap configuration file
;#
;# Copyright (c) 2006 - 2007 Michael Luebben (nagtrap@nagtrap.org)
;# Last Modified: 13.10.2007
;#
;# License:
;#
;# This program is free software; you can redistribute it and/or modify
;# it under the terms of the GNU General Public License version 2 as
;# published by the Free Software Foundation.
;#
;# This program is distributed in the hope that it will be useful,
;# but WITHOUT ANY WARRANTY; without even the implied warranty of
;# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
;# GNU General Public License for more details.
;#
;# You should have received a copy of the GNU General Public License
;# along with this program; if not, write to the Free Software
;# Foundation, Inc., 675 Mass Ave, Cambridge, MA 02139, USA.
;###########################################################################

[global]
;# Select here a language (EN = English / DE = German)
language = EN

;# When you will use a authentification, then enable this option  (0=off / 1=on)
useAuthentification = 1

;# If you use the authentification, then entry here the User that 
;# may changes on the Web-Frontend comma seperated.
allowedUser = nagiosadmin

;# When you use a database for unknown-Traps, then enable this option (0=off / 1=on)
;# If you enable this option, then you musst have a table in your database for unknown
;# traps.
useUnknownTraps = 1

;# Entry here the number of traps, that you will see per side.
step = 30

;# Path to Image-Directory from your SNMP-Trap Frontend installation
images = ./images/

;# Select Icons for the Frontend (nuovo, dropline, nuvola_1 or nuvola_2)
iconStyle = dropline

;# Set here the Trap Message indicates to be cut off is after many indications.
;# When set no parameter, the Trap-Messages wasn't cut.  
cutTrapMessage = 100

;# Set here illegal charactars for output of the javabox
illegalCharJavabox = <,>,'


[nagios]
;# Url to Nagios
prefix = /nagios

;# Path to the Image-Dirctory from your Nagios-Installation
images = ../images/

;# Enter here your information that were used to connect to your database
[database]
host = localhost
user = 
password = 
name = snmptt
tableSnmptt = snmptt

;# Ignore this option, when you don`t use a table for unknown-Traps in your database
tableSnmpttUnk = snmptt_unknown

;*/?>
