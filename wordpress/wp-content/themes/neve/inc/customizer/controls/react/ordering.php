<?php
/**
 * Radio Image Control. Handles data passing from args to JS.
 *
 * @package Neve\Customizer\Controls\React
 */

namespace Neve\Customizer\Controls\React;

/**
 * Class Ordering
 *
 * @package Neve\Customizer\Controls\React
 */
class Ordering extends \WP_Customize_Control {

	/**
	 * Control type.
	 *
	 * @var string
	 */
	public $type = 'neve_ordering_control';

	/**
	 * Additional arguments passed to JS.
	 *
	 * @var array
	 */
	public $components = [];

	/**
	 * Additional arguments passed to JS.
	 *
	 * @var array
	 */
	public $default_order = [];

	/**
	 * Send to JS.
	 */
	public function json() {
		$json                 = parent::json();
		$json['components']   = $this->components;
		$json['defaultOrder'] = $this->default_order;
		return $json;
	}
}
