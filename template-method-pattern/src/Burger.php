<?php

namespace App;

abstract class Burger {

	public function make()
	{
		return $this
				->layBread()
				->addLettuce()
				->addPrimaryToppings()
				->addSauces();
	}

	protected abstract function addPrimaryToppings();

	protected function layBread()
	{
		var_dump("Laying the bread");
		return $this;
	}

	protected function addLettuce()
	{
		var_dump("Adding lettuce");
		return $this;
	}

	protected function addSauces()
	{
		var_dump("Adding sauces");
		return $this;
	}
}