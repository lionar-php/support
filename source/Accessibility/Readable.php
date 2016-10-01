<?php

namespace Accessibility;

trait Readable
{
	public function __get ( $property )
	{
		if ( isset ( $this-> { $property } ) )
			return $this-> { $property };
	}
}