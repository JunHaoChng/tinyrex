#!/usr/bin/env bash

# Check if docker is running
# echo "Check if docker is running"
# DOCK_UP=$(docker info | grep -c Error)

# if (($(which docker))); then


# if (($DOCK_UP >=1)); then


# Check if server is already up
RUNNING=$(docker container ls | grep lamp | wc -l)
if (($RUNNING >= 1)); then
    echo "Found parts of lamp server running. Spinning down then up again."
    ./spin_down.bash
    echo "Spun down lamp server, rerunning script"
    ./spin_up.bash
else
    docker-compose up -d
fi