<?php

namespace Text;

function capitalize ( string $text )
{
	return ucfirst ( strtolower ( $text ) );
}

function capitalized ( string $text )
{
	return capitalize ( $text );
} 

function uppercase ( string $text )
{
	return strtoupper ( $text );
}

function uppercased ( string $text )
{
	return uppercase ( $text );
}

function lowercase ( string $text )
{
	return strtolower ( $text );
}

function lowercased ( string $text )
{
	return lowercase ( $text );
}