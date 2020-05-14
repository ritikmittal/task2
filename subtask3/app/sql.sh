#!/bin/bash
mysqldump -hlocalhost -P3306 -uroot -pChiefCommender --protocol=tcp COMPLAINTS COMPLAINTS > /home/ChiefCommander/complaints.sql
