<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 7/10/2019
 * Time: 9:00 PM
 */

namespace App\FactoryMethod\DriversExample;


class CarTrip extends Trip
{

    public function getDriver() :Driver
    {
        return new CarDriver();
    }
}