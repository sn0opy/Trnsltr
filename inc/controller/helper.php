<?php namespace controller;

class helper extends \F3instance
{
	public static function getLang($short)
	{
		$languages = array(
						'de' => 'German',
						'en' => 'English',
						'fr' => 'French',
						'nl' => 'Dutch',
						'dk' => 'Danish',
						'es' => 'Spanish',
						'se' => 'Swedish');

		return $languages[$short];
	}
}
