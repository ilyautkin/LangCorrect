<?php
/**
 * Remove an Item
 */
class LangCorrectItemRemoveProcessor extends modObjectRemoveProcessor {
	public $checkRemovePermission = true;
	public $objectType = 'LangCorrectItem';
	public $classKey = 'LangCorrectItem';
	public $languageTopics = array('langcorrect');

}

return 'LangCorrectItemRemoveProcessor';