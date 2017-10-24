<?php
class orang {
public $nama;
public $agama;
public $kelas;
public $status;

public function __construct($nama,$agama,$kelas,$status)
{
$this->nama =$nama;
$this->agama =$agama;
$this->kelas =$kelas;
$this->status =$status;
}


public function get_nama()
{
	return $this->nama;
}


public function get_agama()
{
	return $this->agama;
}


public function get_kelas()
{
	return $this->kelas;
}


public function get_status()
{
	return $this->status;
}

}
  ?>
