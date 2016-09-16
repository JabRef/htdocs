#!/bin/bash
find . -maxdepth 1 -name "*.php" -exec ./convertsinglefile.sh "{}" \;

#find de -maxdepth 1 -name "*.php" -exec ./convertsinglefile.sh "{}" de \;
