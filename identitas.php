<?php

require_once 'identitas.php';
$orang =new orang ('Alfi','Islam','XI RPL 1','Pelajar');
echo "Namanya.. ".$orang->get_nama()."<br>";
echo "Tempat Lahir.. ".$orang->get_agama()."<br>";
echo "Kelas.. ".$orang->get_kelas()."<br>";
echo "Status.. ".$orang->get_status()."<br>";

  ?>
