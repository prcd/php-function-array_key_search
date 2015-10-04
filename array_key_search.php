<?php

function array_key_search(&$search, $key, $replace = NULL)
{
	if (isset($search[$key]) || array_key_exists($key, $search))
	{
		if ($replace === NULL)
		{
			return $search[$key];
		}
		else
		{
			$search[$key] = $replace;
			return true;
		}
	}
	foreach ($search as $k => $v)
	{
		if (is_array($v) && count($v) > 0)
		{
			return array_key_search($search[$k], $key, $replace);
		}
	}
	return false;
}
