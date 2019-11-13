#!/bin/bash

# https://downloads.wordpress.org/plugin/wp-pagenavi.2.93.1.zip
# https://downloads.wordpress.org/plugin/regenerate-thumbnails.3.1.1.zip
# https://api.github.com/repos/DrP2025/premium_plugins/contents/hello-dolly-premium.zip

plugins_file="wp-plugins.json";
public_plugins_url="https\:\/\/downloads\.wordpress\.org\/plugin\/";
premium_plugins_url="https\:\/\/api\.github\.com\/repos\/DrP2025\/premium_plugins\/contents\/";

function get_public_plugins {
    for i in $(cat "../$1" | \
    jq ".public" | \
    grep \" | \
    sed 's/[\"|,|\ ]//g' | \
    sed 's/\:/\./' | \
    sed 's/$/.zip/' | \
    sed "s/^/$public_plugins_url/" | \
    sed 's/\.latest//')
    do
        echo "Downloading: " $i;
        curl -sS "$i" > file.zip && unzip file.zip;
        rm -rf file.zip;
    done
}

function get_premium_plugins {
    for i in $(cat "../$1" | \
    jq ".premium" | \
    grep \" | \
    sed 's/[\"|,|\ ]//g' | \
    sed 's/\:/\./' | \
    sed 's/$/.zip/' | \
    sed "s/^/$premium_plugins_url/" | \
    sed 's/\.latest//')
    do
        echo "Downloading: " $i;
        curl -H 'Authorization: token {TOKEN}' -H 'Accept: application/vnd.github.v3.raw' -O -L "$i"
        unzip *.zip;
        rm -rf *.zip;
    done
}

mkdir plugins;

cd plugins;

get_public_plugins $plugins_file;
get_premium_plugins $plugins_file;

rm -rf ../../../plugins;

cd ..;

mv plugins ../../plugins;

## Should run when in ssh on local site

## wp plugin list;
## wp plugin activate --all;