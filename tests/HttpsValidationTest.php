<?php

use PHPUnit\Framework\TestCase;

class HttpsValidationTest extends TestCase
{
	/** @test */
	public function can_use_default_approach() {
		$rule = new \Rackbeat\Rules\HttpsRule( false );

		$this->assertTrue( $rule->passes( 'url', 'https://google.com' ) );
		$this->assertTrue( $rule->passes( 'url', 'https://amazon.com/page/2/shop?just=&doing=some#testing' ) );

		$this->assertFalse( $rule->passes( 'url', 'http://apple.com/' ) );
		$this->assertFalse( $rule->passes( 'url', 'google.com' ) );
	}

	/** @test */
	public function can_use_naive_approach() {
		$rule = new \Rackbeat\Rules\HttpsRule( true );

		$this->assertTrue( $rule->passes( 'url', 'https://google.com' ) );
		$this->assertTrue( $rule->passes( 'url', 'https://amazon.com/page/2/shop?just=&doing=some#testing' ) );

		$this->assertFalse( $rule->passes( 'url', 'http://apple.com/' ) );
		$this->assertFalse( $rule->passes( 'url', 'google.com' ) );
	}
}
