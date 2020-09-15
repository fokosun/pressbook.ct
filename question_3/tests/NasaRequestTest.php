<?php

use Nasa\NasaRequest;
use PHPUnit\Framework\TestCase;

class NasaRequestTest extends TestCase
{
	/**
	 * @test
	 */
	public function it_is_can_set_request_parameters()
	{
		$nasa_request = new NasaRequest([
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
	public function it_throws_an_exception_if_a_given_key_is_not_set()
	{
		$this->expectException(Exception::class);

		new NasaRequest([]);
	}

	/**
	 * @test
	 */
	public function it_returns_null_if_a_given_request_key_does_not_exist()
	{
		$nasa_request = new NasaRequest([
			'name' => 'test name3',
			'weight' => 152.4
		]);

		$this->assertNull($nasa_request->get('does-not-exist'));
	}
}
