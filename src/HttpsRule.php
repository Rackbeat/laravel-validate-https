<?php namespace Rackbeat\Rules;

use Illuminate\Contracts\Validation\Rule;

class HttpsRule implements Rule
{
	/**
	 * Define if should use naive approach (true: starts_with)
	 * or parse the url (false).
	 *
	 * @var bool
	 */
	protected $naive = false;

	public function __construct( $naive = false ) {
		$this->naive = $naive;
	}

	/**
	 * Determine if the validation rule passes.
	 *
	 * @param  string $attribute
	 * @param  mixed  $value
	 *
	 * @return bool
	 */
	public function passes( $attribute, $value ) {
		if ( $this->naive ) {
			return starts_with( $value, 'https://' );
		}

		$url = parse_url( $value );

		return ! empty( $url['scheme'] ) && $url['scheme'] === 'https';
	}

	/**
	 * Get the validation error message.
	 *
	 * @return string
	 */
	public function message() {
		return ':attribute must be a secure url.';
	}
}