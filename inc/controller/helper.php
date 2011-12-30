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
    
    public static function randStr($length = 8)
    {
        return substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, $length);
    }
}
