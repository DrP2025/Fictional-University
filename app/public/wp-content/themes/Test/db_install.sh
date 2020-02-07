#!/bin/bash

rm -rf _database/*.zip;
mkdir _database;

cd _database;

mysqldump -u drp -p local > temp.sql;

read -p "Old: " old;
read -p "New: " new;

filename="$(date +'%Y-%m-%d')";

cat temp.sql | sed -e "s@${old}@${new}@g" > ${filename}.sql
mysql -u drp -p local < ${filename}.sql;

zip ${filename}.zip ${filename}.sql;

rm -rf ${filename}.sql;
rm -rf temp.sql;