#!/bin/bash

for (( i=1 ; i<=50 ; i++ )); do
cp profile.html /home/Army$i/index.html
cp profile.html /home/AirForce$i/index.html
cp profile.html /home/Navy$i/index.html
done
cp profile.html /home/ArmyGeneral/index.html
cp profile.html /home/AirForceChief/index.html
cp profile.html /home/NavyMarshal/index.html

cp Chief_att.php /home/ChiefCommander/index.php
cp htaccess /home/.htaccess
cp 000-default.conf /etc/apache2/sites-enabled/000-default.conf
