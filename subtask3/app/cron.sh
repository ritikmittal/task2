#!/bin/bash
mv ./sql.sh /usr/local/bin/
crontab -l > mycron
echo "* * * * * /usr/local/bin/sql.sh" >> mycron
crontab mycron
rm mycron
