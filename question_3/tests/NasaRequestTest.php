<?php

use PHPUnit\Framework\TestCase;

class NasaRequestTest extends TestCase
{
	/**
	 * @test
	 */
	public function it_is_can_set_request_parameters()
	{
		$nasa_request = new \Nasa\NasaRequest([
			'name' => 'test name',
			'email' => 'some email',
			'something' => 'something else'
		]);

		$this->assertSame('test name', $nasa_request->get('name'));
		$this->assertSame('some email', $nasa_request->get('email'));
		$this->assertSame('something else', $nasa_request->get('something'));
	}

	/**
	 * @test
	 */
	public function it_returns_null_is_a_given_key_is_not_set()
	{
		$nasa_request = new \Nasa\NasaRequest([]);
		$this->assertNull($nasa_request->get('name'));
	}
}