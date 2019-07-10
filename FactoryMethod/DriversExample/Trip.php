<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 7/10/2019
 * Time: 9:02 PM
 */

namespace App\FactoryMethod\DriversExample;


abstract class Trip
{

    abstract public function getDriver() :Driver;

    public function drive()
    {
        $driver = $this->getDriver();
        $driver->drive();
    }
}