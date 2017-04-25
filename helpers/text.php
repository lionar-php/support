<?php

namespace Text;

function capitalize ( string $text )
{
	return ucfirst ( strtolower ( $text ) );
} 

function uppercase ( string $text )
{
	return strtoupper ( $text );
}

function lowercase ( string $text )
{
	return strtolower ( $text );
}