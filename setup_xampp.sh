#!/bin/bash
# Simple helper script to download and install XAMPP on Linux.
# Usage: ./setup_xampp.sh

set -e

# Example version - adjust as needed
XAMPP_VERSION="8.2.12-0"
XAMPP_RUN="xampp-linux-x64-${XAMPP_VERSION}-installer.run"
DOWNLOAD_URL="https://downloadsapachefriends.global.ssl.fastly.net/${XAMPP_RUN}?from_af=true"

if [ ! -f "$XAMPP_RUN" ]; then
    echo "Downloading $XAMPP_RUN..."
    wget "$DOWNLOAD_URL" -O "$XAMPP_RUN"
else
    echo "$XAMPP_RUN already downloaded"
fi

chmod +x "$XAMPP_RUN"
echo "Running installer (you may be prompted for sudo password)"
sudo ./$XAMPP_RUN
