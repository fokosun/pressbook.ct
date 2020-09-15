<?php

namespace Nasa;

use Nasa\Exceptions\AstronautException;

class NasaRequest
{
	protected array $params;

	/**
	 * NasaRequest constructor.
	 * @param array $params
	 * @throws AstronautException
	 */
	public function __construct(array $params)
	{
		if (!$params) {
			throw new AstronautException('Astronaut information are required.');
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
