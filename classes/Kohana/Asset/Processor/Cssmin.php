<?php defined('SYSPATH') OR die('No direct script access.');
/**
* cssmin processor
*
* @package    Despark/asset-merger
* @author     Ivan Kerin
* @copyright  (c) 2011-2012 Despark Ltd.
* @license    http://creativecommons.org/licenses/by-sa/3.0/legalcode
*/
abstract class Kohana_Asset_Processor_Cssmin {

	/**
	 * Process asset content
	 *
	 * @param   string  $content
	 * @return  string
	 */
	static public function process($content)
	{
		$cssmin = new CSSmin;

		return $cssmin->run($content);
	}

} // End Asset_Processor_Cssmin