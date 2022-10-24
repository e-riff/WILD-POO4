<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{

    private string $energy;

    private int $energyLevel;

    private bool $hasParkBrake = true;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }


    public function start(): string
    {
        if ($this->hasParkBrake) {
            throw new Exception('Le frein à main est levé !');
        }
        return "Started !";
    }


    public function forward(): string
    {

        $this->currentSpeed = 15;
        return "Start !";
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    /**
     * Set the value of hasParkBrake
     *
     * @return  self
     */
    public function setParkBrake($hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;

        return $this;
    }
}
