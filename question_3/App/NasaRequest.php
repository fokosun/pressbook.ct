<?php

namespace Nasa;

class NasaRequest
{
	/** @var array  */
	protected array $params;

	/**
	 * NasaRequest constructor.
	 * @param array $params
	 * @throws \Exception
	 */
	public function __construct(array $params)
	{
		if (!$params) {
			throw new \Exception('Astronaut information are required.');
		}

		$this->params = $params;
	}

	/**
	 * @param $key
	 * @return mixed
	 */
	public function get($key)
	{
		if (isset($this->params[$key])) {
			return $this->params[$key];
		}

		return null;
	}
}
