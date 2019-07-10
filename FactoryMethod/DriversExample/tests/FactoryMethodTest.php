<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 7/10/2019
 * Time: 8:54 PM
 */

namespace App\FactoryMethod\DriversExample\tests;

use App\FactoryMethod\DriversExample\CarDriver;
use App\FactoryMethod\DriversExample\CarTrip;
use App\FactoryMethod\DriversExample\MotorDriver;
use App\FactoryMethod\DriversExample\MotorTrip;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{

    /**
     * @test
     */
    public function can_submit_a_trip_with_a_car()
    {
        $factory = new CarTrip();
        $result = $factory->getDriver();
        $this->assertInstanceOf(CarDriver::class, $result);
        $this->assertEquals('i am a car driver and will deliver you to your detination by car', $result->drive());
    }
    /**
     * @test
     */
    public function can_submit_a_trip_with_a_motor()
    {
        $factory = new MotorTrip();
        $result = $factory->getDriver();
        $this->assertInstanceOf(MotorDriver::class, $result);
        $this->assertEquals('i am a motor driver and will deliver you to your detination ', $result->drive());
    }
}