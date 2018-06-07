<?php
	class NightsWatch
	{
		private $members = array();

		public function recruit($member)
		{
			$this->members[] = $member;
		}
		public function fight()
		{
			foreach ($this->members as $member)
				$member instanceof IFighter ? $member->fight() : 0;
		}
	}
?>