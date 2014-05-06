<?php defined('SYSPATH') OR die('No direct script access.');
/**
* Sass css engine
*
* @package    Despark/asset-merger
* @author     Ivan Kerin
* @copyright  (c) 2011-2012 Despark Ltd.
* @license    http://creativecommons.org/licenses/by-sa/3.0/legalcode
*/
abstract class Kohana_Asset_Engine_Sass {

	/**
	 * Process asset content
	 *
	 * @param   string  $content
	 * @param   Asset   $asset
	 * @return  string
	 */
	static public function process($content, Asset $asset)
	{
		// Set error reporting
		$old = error_reporting(E_ALL & ~(E_NOTICE | E_DEPRECATED | E_STRICT));

		// Set SASS
		$sass = new SassParser();

		// Set content
		$content = $sass->toCss($content, false);

		// Set error reporting
		error_reporting($old);

		return $content;
	}

} // End Asset_Engine_Sass