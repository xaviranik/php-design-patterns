<?php

namespace App;

class HamBurger extends Burger
{

	public function addPrimaryToppings()
	{
		var_dump("Adding Ham");
		return $this;
	}
}