<?php

namespace controller;

class translations extends \controller 
{
    static function getTranslationsByProject() 
    {
        $ax = new \model\translations;        
    }

	/**
	 *	Adds a new translation to the database
	 */
	public function addTranslation()
	{
		// Init object
		$translation = new \model\translations;

		$translation->hash = \controller\helper::randStr();
		$translation->string = $this->get('POST.string');
		$translation->translation = $this->get('POST.translation');
		$translation->language = $this->get('POST.language');

		// Save it!
		$translation->save();

		$this->reroute('/string/' . $this->get('POST.string'));
	}

	/**
	 *	Updates a existing translation
	 */
	public function editTranslation()
	{
		// Get Hash of the translation
		$string = $this->get('PARAMS.hash');
        $lang = $this->get('PARAMS.lang');

		// Load it from database
		$translation = new \model\translations;
		$translation->load( array('string = :string AND language = :lang', 
                            array(':string' => $string, ':lang' => $lang)));

		// Change the attributes
        $translation->hash = $translation->hash ? $translation->hash : \controller\helper::randStr();
        $translation->string = $string;
		$translation->translation = trim($this->get('POST.translation'));
		$translation->language = $lang;

		// Save it!
		$translation->save();
	} 
}
