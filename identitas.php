<?php

require_once 'identitas.php';
$orang =new orang ('Salman','Bandung','XI RPL 1','Menikah');
echo "Namanya.. ".$orang->get_nama()."<br>";
echo "Tempat Lahir.. ".$orang->get_ttl()."<br>";
echo "Kelas.. ".$orang->get_kelas()."<br>";
echo "Status.. ".$orang->get_status()."<br>";

  ?>