<?php

namespace Car {

    use Car\Car;

    /**
     * Class CarShop
     * @package Car
     */
    class CarShop
    {

        /**
         * @var Car[]
         */
        private static $cars;

        /**
         * @var int
         */
        private static $nextCar;

        /**
         * CarShop constructor.
         * @param Car[] $cars
         */
        public static function __construct(array $cars)
        {
            self::$cars = $cars;
            self::$nextCar = 0;
        }

        /**
         * @param $car
         */
        public function addCar($car)
        {
            array_push(self::$cars, $car);
        }

        /**
         * @return \Car\Car
         */
        public function getNextCar(){
            if(self::$nextCar < count(self::$cars) - 1){
                self::$nextCar++;
                return self::$cars[self::$nextCar];
            }
            return self::$cars[self::$nextCar];
        }
    }
}