#!/usr/bin/env bash

# Check if server is already up
RUNNING=$(docker container ls | grep lamp | wc -l)
if (($RUNNING >= 1)); then
    echo "Found parts of lamp server running. Running spin_down.bash"
    ./spin_down.bash
else
    docker-compose up -d
fi