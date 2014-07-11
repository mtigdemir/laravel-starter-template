<?php

Validator::extend('alpha_spaces', function($attribute, $value)
{
	return preg_match('/^([-a-z0-9_-\s])+$/i', $value);
});
