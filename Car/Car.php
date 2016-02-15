<?php

namespace Car {

    use Person\Person;

    class Car
    {

        /**
         * @var string
         */
        private $model;

        /**
         * @var int
         */
        private $maxSpeed;

        /**
         * @var int
         */
        private $currentSpeed;

        /**
         * @var string
         */
        private $color;

        /**
         * @return int
         */
        public function getPrice()
        {
            return $this->price;
        }

        /**
         * @param int $price
         */
        public function setPrice($price)
        {
            $this->price = $price;
        }

        /**
         * @return boolean
         */
        public function isIsSportsCar()
        {
            return $this->isSportsCar;
        }

        /**
         * @param boolean $isSportsCar
         */
        public function setIsSportsCar($isSportsCar)
        {
            $this->isSportsCar = $isSportsCar;
        }

        /**
         * @var int
         */
        private $currentGear;

        /**
         * @var Person
         */
        private $owner;

        /**
         * @var int
         */
        private $price = 2;

        /**
         * @var bool
         */
        private $isSportsCar;

        /**
         * Car constructor.
         * @param string $model
         * @param int $maxSpeed
         * @param int $currentSpeed
         * @param string $color
         * @param int $currentGear
         */
        public function __construct($model, $maxSpeed, $currentSpeed, $color, $currentGear)
        {
            $this->model = $model;
            $this->maxSpeed = $maxSpeed;
            $this->currentSpeed = $currentSpeed;
            $this->color = $color;
            $this->currentGear = $currentGear;
        }

        /**
         * @return string
         */
        public function getModel()
        {
            return $this->model;
        }

        /**
         * @param string $model
         */
        public function setModel($model)
        {
            $this->model = $model;
        }

        /**
         * @return int
         */
        public function getMaxSpeed()
        {
            return $this->maxSpeed;
        }

        /**
         * @param int $maxSpeed
         */
        public function setMaxSpeed($maxSpeed)
        {
            $this->maxSpeed = $maxSpeed;
        }

        /**
         * @return int
         */
        public function getCurrentSpeed()
        {
            return $this->currentSpeed;
        }

        /**
         * @param int $currentSpeed
         */
        public function setCurrentSpeed($currentSpeed)
        {
            $this->currentSpeed = $currentSpeed;
        }

        /**
         * @return string
         */
        public function getColor()
        {
            return $this->color;
        }

        /**
         * @param string $color
         */
        public function setColor($color)
        {
            $this->color = $color;
        }

        /**
         * @return string
         */
        public function getCurrentGear()
        {
            return $this->currentGear;
        }

        /**
         * @param int $currentGear
         */
        public function setCurrentGear($currentGear)
        {
            $this->currentGear = $currentGear;
        }

        /**
         * @return Person
         */
        public function getOwner()
        {
            return $this->owner;
        }

        /**
         * @param Person $owner
         */
        public function setOwner(Person $owner)
        {
            $this->owner = $owner;
        }

        /**
         * @return $this
         */
        public function accelarate()
        {
            if ($this->currentSpeed < $this->maxSpeed) {
                $this->currentSpeed++;
            }
            return $this;
        }

        /**
         * @return $this
         */
        public function changeGearUp()
        {
            if ($this->currentGear < 5) {
                $this->currentGear++;
            }
            return $this;
        }

        /**
         * @return $this
         */
        public function changeGearDown()
        {
            if ($this->currentGear > 1) {
                $this->currentGear--;
            }
            return $this;
        }

        /**
         * @param $nextGear
         * @return $this
         */
        public function changeGear($nextGear)
        {
            if (1 <= $nextGear && $nextGear <= 5) {
                $this->setCurrentGear($nextGear);
            }
            return $this;
        }

        /**
         * @param $newColor
         * @return $this
         */
        public function changeColor($newColor)
        {
            $this->color = $newColor;
            return $this;
        }

        /**
         * @param Car $car
         * @return bool
         */
        public function isMoreExpensive(Car $car)
        {
            if($this->price > $car->price ){
                return true;
            }

            return false;
        }

        /**
         * @return float
         */
        public function calculateCarPriceForScrap(){
            return 0.5 * $this->price;
        }

        /**
         * @param $newOwner
         */
        public function changeOwner($newOwner)
        {
            $this->owner = $newOwner;
        }
    }
}