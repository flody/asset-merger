<?php defined('SYSPATH') OR die('No direct script access.');

abstract class Kohana_Asset_Processor_Jsmin {

	/**
	 * Process asset content
	 *
	 * @param   string $content
	 *
	 * @return  string
	 */
	static public function process($content)
	{
		return JSMin::minify($content);
	}

} // End Kohana_Asset_Processor_Jshrink