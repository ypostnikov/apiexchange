#!/bin/bash

#include variables

source ./.env

PDIR="$(dirname "$PWD")";

if [ "$1" != "" ]; then
    echo "Containers id - $1";
else
    echo "Argument number one is empty! Place for mysql container id";
    exit;
fi;

DATABASE_FILE="$PDIR/apiExchange/mysql/source_db.sql";

if [ ! -f "$DATABASE_FILE" ]; then
    echo "$DATABASE_FILE does not exist"
    exit;
fi

# EXPORT DATA INTO DATABASE
cat $DATABASE_FILE | docker exec -i $1 /usr/bin/mysql -u $DB_USERNAME  --password=$DB_PASSWORD $DB_DATABASE
