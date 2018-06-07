<?php
	abstract class House
	{
		public $IntroduceHouse = "House ";
		abstract function getHouseName();
		abstract function getHouseSeat();
		abstract function getHouseMotto();

		public function introduce()
		{
			$this->IntroduceHouse .= $this->getHouseName() . " of ";
			$this->IntroduceHouse .= $this->getHouseSeat() . " : \"";
			$this->IntroduceHouse .= $this->getHouseMotto() . "\"";
			
			print($this->IntroduceHouse . PHP_EOL); 
		}
	}
?>