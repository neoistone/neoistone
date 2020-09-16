#!/bin/bash

status=`subscription-manager list | egrep -i 'Status:         Subscribed'`
if [ "${status}" == "Status:         Subscribed" ]; then
   echo "Subscribed"
else 
echo "Not Subscribe"
if
