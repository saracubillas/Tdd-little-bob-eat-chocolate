<?php

namespace TDDKata;


class littleBobEatChocolate
{
	private $freeChocolates = 0;

	public function getNumberofChocolates($money, $cost, $wrappers)
	{	
		$boughtChocolates = (integer) floor($money/$cost);
		$this->calculateFreeChocolates($boughtChocolates, $wrappers);
		$eatenChocolates = $boughtChocolates + $this->freeChocolates;
		return $eatenChocolates;
	}

	public function calculateFreeChocolates($wrappersIveGot, $wrappersIneed) 
	{
		$freeChocolates = (integer) floor($wrappersIveGot/$wrappersIneed);
		$this->freeChocolates += $freeChocolates;
		$remainderWrappers = $wrappersIveGot%$wrappersIneed;
		$wrappersIveGotNow = $freeChocolates + $remainderWrappers;

		if ($wrappersIveGotNow >=  $wrappersIneed)
		{			
			$this->calculateFreeChocolates($wrappersIveGotNow, $wrappersIneed);
		}
    }

	
}