<?php

namespace Rackbeat\Rules;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class ValidateHttpsServiceProvider extends ServiceProvider
{
	/**
	 * @return void
	 */
	public function boot() {
		Validator::extend( 'https', function ( $attribute, $value, $parameters, $validator ) {
			return ( new HttpsRule )->passes( $attribute, $value );
		} );
	}
}
