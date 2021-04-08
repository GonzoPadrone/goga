<?php

use PHPUnit\Framework\TestCase;
use Zolotarev\MyLog;

class MyLogTest extends TestCase {
    public function testLog() {
    	$folder = 'log\\';
    	if (!file_exists($folder)) {
        	mkdir($folder, 0700);
    	}
        $this->expectOutputString("Hello! It's me.\n");
        MyLog::log("Hello! It's me.\n");
        MyLog::write();
    }

    public function testInstance() {
        $this->assertInstanceOf(MyLog::class, MyLog::Instance());
    }
}