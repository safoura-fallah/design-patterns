<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 7/10/2019
 * Time: 9:11 PM
 */

namespace App\FactoryMethod\DriversExample;


class MotorDriver implements Driver
{

    public function drive()
    {
        return 'i am a motor driver and will deliver you to your detination ';
    }
}