<?php
/**
 * Update an Item
 */
class LangCorrectItemUpdateProcessor extends modObjectUpdateProcessor {
	public $objectType = 'LangCorrectItem';
	public $classKey = 'LangCorrectItem';
	public $languageTopics = array('langcorrect');
	public $permission = 'edit_document';
}

return 'LangCorrectItemUpdateProcessor';
