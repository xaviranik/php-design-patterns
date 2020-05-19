<?php

/**
 * Author: Xavir Anik
 */

interface CarService {
	public function getCost();
	public function getDescription();
}

class BasicInspection implements CarService {
	
	public function getCost()
	{
		return 20;
	}

	public function getDescription()
	{
		return "Basic Inspection";
	}
}

class TireChange implements CarService {
	protected $carService;

	public function __construct(CarService $carService)
	{
		$this->carService = $carService;
	}
	
	public function getCost()
	{
		return 100 + $this->carService->getCost();
	}

	public function getDescription()
	{
		return $this->carService->getDescription() . ", Tire change";
	}
}

class EngineWork implements CarService {
	protected $carService;

	public function __construct(CarService $carService)
	{
		$this->carService = $carService;
	}
	
	public function getCost()
	{
		return 500 + $this->carService->getCost();
	}

	public function getDescription()
	{
		return $this->carService->getDescription() . ", Engine Work";
	}
}

$service = new TireChange(new EngineWork(new BasicInspection));
echo $service->getDescription();