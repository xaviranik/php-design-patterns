<?php

namespace App;

class ChickenBurger extends Burger
{

	public function addPrimaryToppings()
	{
		var_dump("Adding chicken");
		return $this;
	}
}