<?php

namespace Nasa;

class NasaRequest
{
	/** @var array  */
	protected $params;

	/**
	 * NasaRequest constructor.
	 * @param array $params
	 */
	public function __construct(array $params)
	{
		$this->params = $params;
	}

	/**
	 * @param $key
	 * @return mixed
	 */
	public function get($key)
	{
		return $this->params[$key];
	}
}