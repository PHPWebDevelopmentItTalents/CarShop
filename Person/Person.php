<?php

namespace Person {

    use Car\Car;

    class Person
    {
        /**
         * @var string
         */
        private $firstName;

        /**
         * @var int
         */
        private $age;

        /**
         * @var Person
         */
        private $friends;

        /**
         * @var bool
         */
        private $isMale;

        /**
         * @var string
         */
        private $personalNumber;

        /**
         * @var int
         */
        private $money = 414153;

        /**
         * @var Car
         */
        private $car;

        /**
         * @return boolean
         */
        public function isIsMale()
        {
            return $this->isMale;
        }

        /**
         * @param boolean $isMale
         */
        public function setIsMale($isMale)
        {
            $this->isMale = $isMale;
        }

        /**
         * @return string
         */
        public function getPersonalNumber()
        {
            return $this->personalNumber;
        }

        /**
         * @param string $personalNumber
         */
        public function setPersonalNumber($personalNumber)
        {
            $this->personalNumber = $personalNumber;
        }

        /**
         * @return int
         */
        public function getMoney()
        {
            return $this->money;
        }

        /**
         * @param int $money
         */
        public function setMoney($money)
        {
            $this->money = $money;
        }

        /**
         * @return Car
         */
        public function getCar()
        {
            return $this->car;
        }

        /**
         * @param Car $car
         */
        public function setCar($car)
        {
            $this->car = $car;
        }

        /**
         * Person constructor.
         * @param string $firstName
         * @param int $age
         */
        public function __construct($firstName, $age)
        {
            $this->firstName = $firstName;
            $this->age = $age;
            $this->friends = [];
        }

        /**
         * @return string
         */
        public function getFirstName()
        {
            return $this->firstName;
        }

        /**
         * @param string $firstName
         */
        public function setFirstName($firstName)
        {
            $this->firstName = $firstName;
        }

        /**
         * @return int
         */
        public function getAge()
        {
            return $this->age;
        }

        /**
         * @param int $age
         */
        public function setAge($age)
        {
            $this->age = $age;
        }

        /**
         * @return Person
         */
        public function getFriends()
        {
            return $this->friends;
        }

        /**
         * @param Person $friend
         */
        public function setFriends($friend)
        {
            $this->friends = $friend;
        }

        /**
         * @param Car $car
         * @return bool
         */
        public function buyCar($car)
        {
            if ($this->money >= $car->getPrice()) {
                $this->money -= $car->getPrice();
                $this->car = $car;
                $car->changeOwner($this);
                return true;
            }

            return false;
        }

        public function sellCarForScrap()
        {
            $this->setMoney($this->car->calculateCarPriceForScrap());
            $this->setCar(null);
        }
    }
}