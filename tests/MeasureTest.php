<?php

use PHPUnit\Framework\TestCase;

include '../classes/Measure.php';

/**
 *  test case.
 */
class MeasureTest extends TestCase {

    public function testMeasure() {
        
        $measure = new Measure(1, 15, 25, new DateTime('2018-02-15'));
        
        $this->assertEquals(1, $measure->id);
        $this->assertEquals(15, $measure->temperature);
        $this->assertEquals(25, $measure->humidite);
        $this->assertEquals(2018, $measure->datetime->format("Y"));
        $this->assertEquals(2, $measure->datetime->format("m"));
        $this->assertEquals(15, $measure->datetime->format("d"));
    }
}

