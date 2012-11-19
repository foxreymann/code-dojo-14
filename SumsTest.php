<?php

require 'Sums.php';

class SumsTest extends PHPUnit_Framework_TestCase
{
	public function testCreationOfFibonacciTranslationTable() {
		$table = createFibonacciTranslationTable();
        $this->assertEquals(126,count($table));
	}

    public function test1() {
        $sums = sums(1);
        $this->assertEquals('1',$sums[0]);
    }

    public function test2() {
        $sums = sums(2);
        $this->assertEquals('10',$sums[0]);
    }

    public function test3() {
		// 100, 11
        $sums = sums(3,SORT_NUMERIC);
		sort($sums);
        $this->assertEquals('11',$sums[0]);
        $this->assertEquals('100',$sums[1]);
    }

    public function test4() {
		// 101
        $sums = sums(4,SORT_NUMERIC);
		sort($sums);
        $this->assertEquals('101',$sums[0]);
    }

	public function testShowingAllResults() {
		echo "\n All results \n";
		for($i = 0; $i <= 20; $i++) {		
			echo $i." can be represented by: "; 
			var_dump(sums($i));
			echo "\n";	
		}
	}
}
