#!/bin/bash

target=${1::-4}
targetfile="$1"

if [ -z "$2" ]; then
  target="en/${target:2}"
  targetfile="${targetfile:2}"
fi

# Strip "Help" suffix
if [ "${target: -4}" = "Help" ]; then
  target=${target::-4}
fi

read -r -d '' content << EOM
<?php
  header("Location: https://help.jabref.org/$target", true, 301);
  die();
?>
EOM

echo "$content" > $targetfile
