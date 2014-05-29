<?php
/**
 * Remove an Items
 */
class LangCorrectItemsRemoveProcessor extends modProcessor {
    public $checkRemovePermission = true;
	public $objectType = 'LangCorrectItem';
	public $classKey = 'LangCorrectItem';
	public $languageTopics = array('langcorrect');

	public function process() {

        foreach (explode(',',$this->getProperty('items')) as $id) {
            $item = $this->modx->getObject($this->classKey, $id);
            $item->remove();
        }
        
        return $this->success();

	}

}

return 'LangCorrectItemsRemoveProcessor';