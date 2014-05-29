<?php
/**
 * Get an Item
 */
class LangCorrectItemGetProcessor extends modObjectGetProcessor {
	public $objectType = 'LangCorrectItem';
	public $classKey = 'LangCorrectItem';
	public $languageTopics = array('langcorrect:default');
}

return 'LangCorrectItemGetProcessor';