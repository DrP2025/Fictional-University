#!/bin/bash

rm -rf _database/*.zip;

mysqldump -u drp -p local > _database/temp.sql;
zip _database/temp.zip _database/temp.sql;

rm -rf _database/temp.sql;