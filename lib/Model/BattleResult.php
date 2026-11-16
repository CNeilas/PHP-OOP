<?php

class BattleResult {
    private $usedJediPowers;

    private $winningShip = null;

    private $losingShip = null;

    public function __construct($usedJediPowers, Ship $winningShip, Ship $losingShip) {
        $this->usedJediPowers = $usedJediPowers;
        $this->winningShip = $winningShip;
        $this->losingShip = $losingShip;
    }

    public function wereJediPowersUsed() {
        return $this->usedJediPowers;
    }

    public function getWinningShip() {
        return $this->getWinningShip;
    }

    public function getLosingShip() {
        return $this->losingShip;
    }

    public function isThereAWinner() {
        return $this->getWinningShip() !== null;
    }
}