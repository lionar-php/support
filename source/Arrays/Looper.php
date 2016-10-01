<?php

namespace Arrays;

use ArrayIterator;
use IteratorAggregate;

abstract class Looper implements IteratorAggregate
{
	private $elements = array ( );

	public function loop ( array $elements = array ( ) )
	{
		$this->elements = $elements;
	}

	public function getIterator ( ) : ArrayIterator
	{
		return new ArrayIterator ( $this->elements );
	}

	public function __get ( $property )
	{
		if ( isset ( $this-> { $property } ) )
			return $this-> { $property };
	}
}