<?php
/**
 * Create an Item
 */
class LangCorrectItemCreateProcessor extends modObjectCreateProcessor {
	public $objectType = 'LangCorrectItem';
	public $classKey = 'LangCorrectItem';
	public $languageTopics = array('langcorrect');
	public $permission = 'new_document';


	/**
	 * @return bool
	 */
	public function beforeSet() {
		$alreadyExists = $this->modx->getObject('LangCorrectItem', array(
			'name' => $this->getProperty('name'),
		));
		if ($alreadyExists) {
			$this->modx->error->addField('name', $this->modx->lexicon('langcorrect_item_err_ae'));
		}

		return !$this->hasErrors();
	}

}

return 'LangCorrectItemCreateProcessor';