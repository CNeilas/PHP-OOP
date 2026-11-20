<?php

class AbstractShip {
        private $id;

    protected $name;

    protected $weaponPower = 0;
    
    protected $strength = 0;

    public function __construct($name) {
        $this->name=$name;
    }

    public function sayHello()
    {
        echo "Hello";
    }

    public function getNameAndSpecs($useShortFormat = false) {

        if ($useShortFormat) {
            return sprintf(
                '%s: %s/%s/%s',
                $this->name,
                $this->weaponPower,
                $this->getJediFactor(),
                $this->strength
            );
        } else {
            return sprintf(
                '%s: w: %s, j: %s, s: %s',
                $this->name,
                $this->weaponPower,
                $this->getJediFactor(),
                $this->strength
            );
        }
        
    }

    public function doesGivenShipHaveMoreStrength($givenShip) {
        return $givenShip->strength > $this->strength;
    }

    public function setStrength($strength) {
        if(!is_numeric($strength)) {
            throw new Exception("Invalid strength passed " .$strength);
        }
        $this->strength = $strength;
    }

    public function setName($name) {

        $this->name = $name;
    }

     public function setWeaponPower($weaponPower) {

        $this->weaponPower = $weaponPower;
    }
    
    public function getName() {
        return $this->name;
    }

    public function getWeaponPower() {
        return $this->weaponPower;
    }
     public function getStrength() {
        return $this->strength;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
}