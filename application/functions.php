<?php

/*
 * Import translation helper into the global namespace.
 */
function __($string, array $values = NULL, $lang = 'en-us')
{
	return \Kohana\Core\I18n::__($string, $values, $lang);
};