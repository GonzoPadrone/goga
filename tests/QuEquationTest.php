<?php

namespace QuEquation;

use PHPUnit\Framework\TestCase;
use Zolotarev\QuEquation;
use Zolotarev\ZolotarevException;

class QuEquationTest extends TestCase {
	
    private $QuEquation;

    protected function setUp(): void {
        $this->QuEquation = new QuEquation();
    }

    protected function tearDown(): void {
        $this->QuEquation = null;
    }

    /**
     * @dataProvider  QuEquationProvider
     * @param $a
     * @param $b
     * @param $c
     */

    public function testQuEquation($a, $b, $c, $result){
        $this->assertEquals($result, $this->QuEquation->solve($a, $b, $c));
    }

    public function  QuEquationProvider()
    {
        return array(
            array(-1, 0, 16, [-4, 4]),
            array(0, 3, 9, [-3]),
            array(1, 6, 9, [-3])
        );
    }

    /**
     * @dataProvider  QuEquationExProvider
     * @param $a
     * @param $b
     * @param $c
     */

    public function testQuEquation2($a, $b, $c, $result)
    {
        $this->expectExceptionMessage('Ошибка: уравнение не имеет корней.',ZolotarevException::class);
        $this->assertEquals($result, $this->QuEquation->solve($a, $b, $c));
    }

    public function  QuEquationExProvider()
    {
        return array(
            array(5, -5, 5, [0]),
            array(2, -6, 8, [0])
        );
    }

}