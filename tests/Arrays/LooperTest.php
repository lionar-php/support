<?php

namespace Support\Arrays\Tests;

use Mockery;
use Testing\TestCase;

class LooperTest extends TestCase
{
	/**
	 * @test
	 */
	public function loop_withArray_setsLooperElements ( )
	{
		$elements = array ( 'my element', 'another one' );
		$looper = Mockery::mock ( 'Support\\Arrays\\Looper[]' );
		$looper->loop ( $elements );
		assertThat ( $looper->elements, is ( identicalTo ( $elements ) ) );
	}
}