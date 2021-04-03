<?php

namespace Zolotarev;

Class Equation
{
    public function li_solve($a, $b)
    {

        if ($a == 0) {
            throw new ZolotarevException("Ошибка: уравнения не существует.");
        }
        MyLog::log("Линейное уравнение");
        return $this->X = array(-($b / $a));
    }

    protected $X;
}

?>