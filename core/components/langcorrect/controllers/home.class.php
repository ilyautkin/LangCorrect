<?php
/**
 * The home manager controller for LangCorrect.
 *
 */
class LangCorrectHomeManagerController extends LangCorrectMainController {
	/* @var LangCorrect $LangCorrect */
	public $LangCorrect;


	/**
	 * @param array $scriptProperties
	 */
	public function process(array $scriptProperties = array()) {
	}


	/**
	 * @return null|string
	 */
	public function getPageTitle() {
		return $this->modx->lexicon('langcorrect');
	}


	/**
	 * @return void
	 */
	public function loadCustomCssJs() {
		$this->addJavascript($this->LangCorrect->config['jsUrl'] . 'mgr/widgets/items.grid.js');
		$this->addJavascript($this->LangCorrect->config['jsUrl'] . 'mgr/widgets/home.panel.js');
		$this->addJavascript($this->LangCorrect->config['jsUrl'] . 'mgr/sections/home.js');
		$this->addHtml('<script type="text/javascript">
		Ext.onReady(function() {
			MODx.load({ xtype: "langcorrect-page-home"});
		});
		</script>');
	}


	/**
	 * @return string
	 */
	public function getTemplateFile() {
		return $this->LangCorrect->config['templatesPath'] . 'home.tpl';
	}
}