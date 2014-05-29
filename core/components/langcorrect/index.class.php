<?php

/**
 * Class LangCorrectMainController
 */
abstract class LangCorrectMainController extends modExtraManagerController {
	/** @var LangCorrect $LangCorrect */
	public $LangCorrect;


	/**
	 * @return void
	 */
	public function initialize() {
		$corePath = $this->modx->getOption('langcorrect_core_path', null, $this->modx->getOption('core_path') . 'components/langcorrect/');
		require_once $corePath . 'model/langcorrect/langcorrect.class.php';

		$this->LangCorrect = new LangCorrect($this->modx);

		$this->addCss($this->LangCorrect->config['cssUrl'] . 'mgr/main.css');
		$this->addJavascript($this->LangCorrect->config['jsUrl'] . 'mgr/langcorrect.js');
		$this->addHtml('<script type="text/javascript">
		Ext.onReady(function() {
			LangCorrect.config = ' . $this->modx->toJSON($this->LangCorrect->config) . ';
			LangCorrect.config.connector_url = "' . $this->LangCorrect->config['connectorUrl'] . '";
		});
		</script>');

		parent::initialize();
	}


	/**
	 * @return array
	 */
	public function getLanguageTopics() {
		return array('langcorrect:default');
	}


	/**
	 * @return bool
	 */
	public function checkPermissions() {
		return true;
	}
}


/**
 * Class IndexManagerController
 */
class IndexManagerController extends LangCorrectMainController {

	/**
	 * @return string
	 */
	public static function getDefaultController() {
		return 'home';
	}
}