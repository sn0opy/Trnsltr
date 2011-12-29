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

		$translation->hash = md5(time());
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
		$hash = $this->get('PARAMS.hash');

		// Load it from database
		$translation = new \model\translations;
		$translation->load(array('hash = :hash', array(':hash' => $hash)));

		if ($translation->dry())
			return;

		// Change the attributes
		$translation->translation = $this->get('POST.translation');
		$translation->language = $this->get('PARAMS.lang');

		// Save it!
		$translation->save();
		$this->reroute('/string/' . $translatoin->string);
	} 
}
