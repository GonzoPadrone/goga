<?php

namespace Zolotarev;

use core\EquationInterface;

Class QuEquation extends Equation implements EquationInterface
{

    protected function dis($a, $b, $c)
    {
        return ($b ** 2) - 4 * $a * $c;
    }

    public function solve(float $a, float $b,float $c) : array
    {

        $x = $this->dis($a, $b, $c);

        if ($a == 0) {
            return $this->li_solve($b, $c);
        }
        MyLog::log("Квадратное уравнение");
        if ($x > 0) {
            return $this->X = array(
                (-$b + sqrt($x)) / (2 * $a),
                (-$b - sqrt($x)) / (2 * $a)
            );
        }

        if ($x == 0) {
            return $this->X = array(-($b / (2 * $a)));
        }

        throw new ZolotarevException("Ошибка: уравнение не имеет корней.");

    }

}

?>