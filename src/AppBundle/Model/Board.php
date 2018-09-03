<?php

namespace AppBundle\Model;

class Board {

    const COLUMNS = 7;
    const ROWS = 6;

    private $cells;

    public function __construct() {
        $this->reset();
    }

    public function reset() {
        $this->initializeCells();
    }

    public function getCells(): array {
        return $this->cells;
    }

    private function initializeCells() {
        for ($i = 0; $i < self::COLUMNS; ++$i) {
            $this->cells[$i] = array();
            for ($j = 0; $j < self::ROWS; ++$j) {
                $this->cells[$i][$j] = null;
            }
        }
    }

}
