<?php

namespace Support\Accessibility;

trait Accessible
{
	public function __get ( $property )
	{
		if ( isset ( $this-> { $property } ) )
			return $this-> { $property };
	}
}