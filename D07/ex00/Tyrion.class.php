<?php
	class Tyrion extends Lannister
	{
		public $name = "Tyrion";

		public function __construct()
		{
			parent::__construct();
			print("My name is " . $this->name . PHP_EOL);
		}
		public function getSize()
		{
			return "Short";
		}
	}
?>