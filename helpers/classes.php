<?php

namespace Support\Classes;

function name ( $class )
{
	$path = explode ( '\\', get_class ( $class ) );
    return array_pop ( $path );
}