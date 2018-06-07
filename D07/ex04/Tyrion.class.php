<?php
	class Tyrion extends Lannister
	{
		public function sleepWith($spleeper)
		{
			print (($spleeper instanceof Lannister ? "Not even if I'm drunk !" : "Let's do this.") . PHP_EOL);
		}
	}
?>