<?php

namespace Arrays;

use function Classes\name;

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

/**
 * Return all elements of a looper.
 * 
 * @param  Arrays\Looper $looper 	The looper to return all elements from
 * @return Arrays\Looper    		The looper with all elements to loop over selected.
 */
function all ( Looper $looper )
{
	return $looper->all ( );
}


function on ( Looper $looper )
{
	$name = strtolower ( name ( $looper ) );
	return array ( $name => $looper );
}