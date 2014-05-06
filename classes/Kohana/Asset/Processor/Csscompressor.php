<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Minify_CSS_Compressor processor
 *
 * @package        Despark/asset-merger
 * @author         Ivan Kerin
 * @copyright  (c) 2011-2012 Despark Ltd.
 * @license        http://creativecommons.org/licenses/by-sa/3.0/legalcode
 */
abstract class Kohana_Asset_Processor_Csscompressor {

	/**
	 * Process asset content
	 *
	 * @param   string $content
	 *
	 * @return  string
	 */
	static public function process($content)
	{
		return Minify_CSS_Compressor::process($content);
	}

} // End Kohana_Asset_Processor_Csscompressor