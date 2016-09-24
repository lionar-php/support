<?php

namespace Support;

/**
 * Return a copy of a given array without the specified keys.
 * 
 * @param  array  $keys  		The keys to remove from the array.
 * @param  array  $array 		The array to remove the keys from
 * @return array        		The array without specified keys.
 */
function array_except ( array $keys, array $array ) : array
{
	foreach ( $keys as $key )
		if ( isset ( $array [ $key ] ) )
			unset ( $array [ $key ] );
	return $array;
}


function is_serialized ( $value )
{
	 return ( @unserialize ( $value ) !== false );
}