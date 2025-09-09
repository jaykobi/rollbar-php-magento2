<?php

namespace Rollbar\Magento2\Plugin;

class HttpPlugin
{
	public function aroundCatchException($subject, callable $callable, $bootstrap, \Throwable $exception): bool
	{
		$callable($bootstrap, $exception);

		\Rollbar\Rollbar::error($exception);
		return true;
	}
}
