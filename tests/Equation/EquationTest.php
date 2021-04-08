<?php

namespace Equation;

use PHPUnit\Framework\TestCase;
use Zolotarev\Equation;
use Zolotarev\ZolotarevException;

class EquationTest extends TestCase {

    private $Equation;

    protected function setUp(): void {
        $this->Equation = new Equation();
    }

    protected function tearDown(): void {
        $this->Equation = null;
    }

    /**
     * @dataProvider providerLi_solve
     */
    public function testLi_solve($a, $b, $result){
        $this->assertEquals($result, $this->Equation->li_solve($a, $b));
    }

    public function providerLi_solve() {
        return array(
            array(6, 42, [-7]),
            array(3, 9, [-3])
        );
    }
    /**
     * @dataProvider providerZolotarevException
    */
    public function testZolotarevException($a, $b, $result) {
        $this->expectException(ZolotarevException::class);
        $this->expectExceptionMessage('Ошибка: уравнения не существует.');
        $this->assertEquals($result, $this->Equation->li_solve($a, $b));
    }
        public function providerZolotarevException() {
        return array(
            array(0, 3, [4]),
            array(0, 12, [1])
        );
    }
}