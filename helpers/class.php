<?php

namespace Support\Class;

function name ( $class )
{
	$path = explode ( '\\', get_class ( $class ) );
    return array_pop ( $path );
}
