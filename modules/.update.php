<?php
include("modules/trm.php");
include("modules/help.php");
include("modules/trip.php");

function logo() {
  system("clear");
  echo <<<EOL
\033[01;33m


\033[01;31mNITK IP-GEOLOCATION


   \033[01;37m}\033[01;31m----------------------------------------\033[01;37m{
}\033[01;31m-------------- \033[01;32mTrack IPLocation\033[01;31m --------------\033[01;37m{
   }\033[01;31m----------------------------------------\033[01;37m{

\033[00m
EOL;
}

function upd() {
  logo();
  echo "\n\033[01;32mUpdating NITK IP-GEOLOCATION.........\033[01;37m\n\n";
  sleep(1);
  system("cd ~/ && git clone https://github.com/rajkumardusad/IP-Tracer.git");
  system("cd ~/ && sudo git clone https://github.com/rajkumardusad/IP-Tracer.git");
  system("cd ~/IP-Tracer && sh install");
  logo();
  echo "\n\033[01;32m              NITK IP-GEOLOCATION updated !!!\033[01;37m\n";
  sleep(1);
}
upd();
?>
