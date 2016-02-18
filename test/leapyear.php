<?php

class LeapyearTest extends PHPUnit_Framework_TestCase
{
    public function include_file(){
        ob_start();
        include(__DIR__ . '/../src/leapyear.php');
        return ob_get_clean();
    }
    
    public function testDummy() {
        $output = $this->include_file();
        $this->assertEquals("", $output, "Parameter tidak diset, harus mengeluarkan string kosong");
    }
}