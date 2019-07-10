<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 7/10/2019
 * Time: 9:05 PM
 */

namespace App\FactoryMethod\DriversExample;


class CarDriver implements Driver
{
    public function drive()
    {
        return 'i am a car driver and will deliver you to your detination by car';
    }
}