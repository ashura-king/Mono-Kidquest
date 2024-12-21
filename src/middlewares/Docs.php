<?php

use App\Core\Middleware;

class Docs extends Middleware
{
	static function runnable(Request $request, callable $next)
	{
		echo '<a
		style="text-decoration: none; color: gray; border: 1px solid gray; padding: 0.4rem 1rem;"
		href="https://github.com/zorncbllr/Mono">View Documentation</a>';

		return $next();
	}
}
