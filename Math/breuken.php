<?php
class breuken {
	private $Optie;
	private $iTellerAnt;
	private $iNoemerAnt;
	private $Getal = 1;
	
	public function __construct($Optie = 0)
	{
		$this->Optie = $Optie;
	}
	
	public function Optellen($Getal,$Teller,$Noemer,$Getal2,$Teller2,$Noemer2,$DelenDoor)
	{
		$BreukOneTel = $Teller  * $Noemer2;
		$BreukTwoTel = $Teller2 * $Noemer;
		$uitkomst = $BreukOneTel  + $BreukTwoTel;
		$uitkomst2 = $Noemer * $Noemer2;
		$this->iTellerAnt = $uitkomst / $DelenDoor;
		$this->iNoemerAnt = $uitkomst2 / $DelenDoor;
	}
	
	public function geefAntwoord()
	{
		echo $this->iTellerAnt . '</br>';	
		echo $this->Getal . '---' . '</br>';
		echo $this->iNoemerAnt;	
	}
}

$oBreuk = new breuken();
$oBreuk->Optellen('',3,10,'',1,8,2);
$oBreuk->geefAntwoord();