<?php namespace Zolotarev;

use core\LogAbstract;
use core\LogInterface;


Class MyLog extends LogAbstract implements LogInterface
{

    public function _log($str)
    {
        $this->log[] = $str;
    }

    /**
     * @param String $str строка для записи в массив лога
     */
    public static function log(string $str) :void
    {
        self::Instance()->_log($str);
    }

    public function _write()
    {
        $date = date('d.m.Y_H.i.s.v');
        foreach ($this->log as $value) {
            echo $value;
            file_put_contents("log\\$date.log", $value . PHP_EOL, FILE_APPEND);
        }
    }

    public static function write() :void
    {
        self::Instance()->_write();
    }

}

?>