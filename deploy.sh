#!/bin/sh

ssh irfan@104.236.129.7 <<EOF
  cd ~/zultheme
  git pull
  sudo rm -rf /var/www/zulhasan/wp-content/themes/zultheme/
  sudo mkdir /var/www/zulhasan/wp-content/themes/zultheme
  rsync -av --exclude='.git/' --exclude='deploy.sh' . /var/www/zulhasan/wp-content/themes/zultheme/
  exit
EOF
